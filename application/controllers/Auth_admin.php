<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth_admin extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Admin_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->auth = new stdClass;
        $this->load->library('flexi_auth');

        if (!$this->flexi_auth->is_logged_in_via_password() || !$this->flexi_auth->is_admin()) {
            $this->flexi_auth->set_error_message('You must login as an admin to access this area.', TRUE);
            $this->session->set_flashdata('message', $this->flexi_auth->get_messages());
            redirect('auth');
        }
        $this->data = null;
        $this->data['admininfo'] = $this->flexi_auth->get_user_by_identity_row_array();
    }

    function include_files() {
        $this->data['header'] = $this->load->view('admin/header', $this->data, TRUE);
        $this->data['sidebar'] = $this->load->view('admin/sidebar', NULL, TRUE);
        $this->data['common'] = $this->load->view('admin/common', NULL, TRUE);
        $this->data['footer'] = $this->load->view('admin/footer', NULL, TRUE);
        return $this->data;
    }

    function index() {
        $this->dashboard();
    }

    function dashboard() {
        $this->data['dashboard_data'] = $this->Admin_model->dashboard_data();
        $this->data['message'] = $this->session->flashdata('message');
        $this->data = $this->include_files();
        $this->load->view('admin/dashboard', $this->data);
    }

    function users() {
        $this->data['message'] = (!isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
        $this->data = $this->include_files();
        $this->load->view('admin/users', $this->data);
    }

    function businesses() {
        $this->data['message'] = (!isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
        $this->data = $this->include_files();
        $this->load->view('admin/businesses', $this->data);
    }

    function business_detail($business_id) {
        $this->data['business'] = $businessinfo = $this->Common_model->get_business($business_id);
        $this->data['message'] = (!isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
        $this->data = $this->include_files();
        $this->load->view('admin/business_detail', $this->data);
    }

    function categories() {
        $this->data['message'] = (!isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
        $this->data = $this->include_files();
        $this->load->view('admin/categories', $this->data);
    }

    function visitor_adds() {
        $this->data['message'] = (!isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
        $this->data = $this->include_files();
        $this->load->view('admin/visitor_adds', $this->data);
    }

    public function file_check($str) {
        $allowed_mime_type_arr = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png');
        $mime = get_mime_by_extension($_FILES['image']['name']);
        if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
            if (in_array($mime, $allowed_mime_type_arr)) {
                return true;
            } else {
                $this->form_validation->set_message('file_check', 'Please select only gif/jpg/png file.');
                return false;
            }
        } else {
            $this->form_validation->set_message('file_check', 'Please choose a file to upload.');
            return false;
        }
    }

    function add_categories($category_id = null) {
        if ($this->input->post()) {
            $error = "";
            $this->load->library('form_validation');
            $this->load->helper('file');
            $this->form_validation->set_rules('name', 'Category Name', 'required');
            //$this->form_validation->set_rules('description', 'Description', 'required');
            if ($this->input->post('old_image') == "") {
                $this->form_validation->set_rules('image', '', 'callback_file_check');
            }

            if ($this->form_validation->run() == true) {
                $categorydata = $this->data['donorsdata'] = array(
                    "name" => $this->input->post('name'),
                    "description" => $this->input->post('description'));

                if (!empty($_FILES['image']['name'])) {
                    $this->load->library('upload');
                    $config['upload_path'] = 'include_files/categories';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['overwrite'] = FALSE;
                    $config['encrypt_name'] = TRUE;
                    $config['max_filename'] = 25;
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('image')) {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('message', $error);
                    } else {
                        $file_info = $this->upload->data();
                        $categorydata['image'] = $file_info['file_name'];
                    }
                }

                if ($error == "") {
                    if ($this->input->post('edit_id')) {
                        if (isset($categorydata['image'])) {
                            if (file_exists(FCPATH . 'include_files/categories/' . $this->input->post('old_image'))) {
                                unlink(FCPATH . 'include_files/categories/' . $this->input->post('old_image'));
                            }
                            $categorydata['image'] = $file_info['file_name'];
                        } else {
                            $categorydata['image'] = $this->input->post('old_image');
                        }
                        $result = $this->Common_model->select_update('categories', $categorydata, array('id' => $this->input->post('edit_id')));
                    } else {
                        $result = $this->Common_model->insert('categories', $categorydata);
                    }
                    $this->session->set_flashdata('message', "Information saved successfully");
                    redirect('auth_admin/categories');
                } else {
                    $this->session->set_flashdata('message', $error);
                }
            } else {
                $this->data['category_info'] = array(
                    'name' => $this->input->post('name'),
                    'description' => $this->input->post('description')
                );
                $this->data['message'] = (validation_errors() != "") ? validation_errors('<p class="error_msg">', '</p>') : $this->upload->display_errors();
            }
        }
        if ($category_id != "") {
            $this->data['category_info'] = (array) $this->Common_model->select_where_row('categories', array('id' => $category_id));
        }
        $this->data['message'] = (!isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
        $this->data = $this->include_files();
        $this->load->view('admin/add_categories', $this->data);
    }

    function add_subcategories($subcategory_id = null) {

        if ($this->input->post()) {
            $error = "";
            $this->load->library('form_validation');
            $this->load->helper('file');
            $this->form_validation->set_rules('name', 'Category Name', 'required');
            //$this->form_validation->set_rules('description', 'Description', 'required');

            if ($this->form_validation->run() == true) {
                $subcategorydata = array(
                    "name" => $this->input->post('name'),
                    "category_id" => $this->input->post('category_id'),
                    "description" => $this->input->post('description'));


                if ($this->input->post('edit_id')) {
                    $result = $this->Common_model->select_update('subcategories', $subcategorydata, array('id' => $this->input->post('edit_id')));
                } else {
                    $result = $this->Common_model->insert('subcategories', $subcategorydata);
                }
                if (!empty($result)) {
                    $this->session->set_flashdata('message', "Information saved successfully");
                    redirect('auth_admin/subcategories');
                } else {
                    $this->session->set_flashdata('message', "Something went wrong,Please try again later");
                }
            } else {
                $this->data['subcategory_info'] = array(
                    'name' => $this->input->post('name'),
                    'description' => $this->input->post('description')
                );
                $this->data['message'] = validation_errors('<p class="error_msg">', '</p>');
            }
        }
        if ($subcategory_id != "") {
            $this->data['subcategory_info'] = (array) $this->Common_model->select_where_row('subcategories', array('id' => $subcategory_id));
        }
        $this->data['categories'] = $this->Common_model->select_where('categories', array('status' => 1));
        $this->data['message'] = (!isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
        $this->data = $this->include_files();
        $this->load->view('admin/add_subcategories', $this->data);
    }

    function logout() {
        $this->flexi_auth->logout(TRUE);
        $this->session->set_flashdata('message', $this->flexi_auth->get_messages());
        redirect('admin');
    }

    function subcategories() {
        $this->data['message'] = (!isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
        $this->data = $this->include_files();
        $this->load->view('admin/subcategories', $this->data);
    }

    function get_user_account() {
        $data = $this->Admin_model->get_user_account();
        die($data);
    }

    function get_userearnings() {
        $userinfo = $this->Common_model->select_where_row('user_accounts', array('uacc_id' => $this->input->post('user_id')));
        die(json_encode($userinfo));
    }

    function get_business() {
        $data = $this->Admin_model->get_business();
        die($data);
    }

    function get_visitors() {
        $data = $this->Admin_model->get_visitors();
        die($data);
    }

    function get_categories() {
        $data = $this->Admin_model->get_categories();
        die($data);
    }

    function get_subcategories() {
        $data = $this->Admin_model->get_subcategories();
        die($data);
    }

    function get_payments($user_id) {
        $data = $this->Admin_model->get_payments($user_id);
        die($data);
    }

    function record_status() {
        $table_name = $this->input->post('table_name');
        $table_coloum_name = $this->input->post('table_coloum');
        $table_id = $this->input->post('id');
        $recordinfo = $this->Common_model->select_where_row($table_name, array($table_coloum_name => $table_id));
        if ($recordinfo->status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $result = $this->Common_model->select_update($table_name, array('status' => $status), array($table_coloum_name => $table_id));
        echo json_encode($result);
        die();
    }

    function susped_user() {
        $recordinfo = $this->Common_model->select_where_row('user_accounts', array('uacc_id' => $this->input->post('user_id')));
        if ($recordinfo->uacc_suspend == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $result = $this->Common_model->select_update('user_accounts', array('uacc_suspend' => $status), array('uacc_id' => $this->input->post('user_id')));
        echo json_encode($result);
        die();
    }

    function get_item_info() {
        $table_name = $this->input->post('table_name');
        $table_coloum_name = $this->input->post('table_coloum');
        $table_id = $this->input->post('id');
        $result = $this->Common_model->select_where_row($table_name, array($table_coloum_name => $table_id));
        echo json_encode($result);
        die();
    }

    function business_status() {
        $recordinfo = $this->Common_model->select_where_row('businesses', array('id' => $this->input->post('id')));
        if ($recordinfo->is_approved == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        if ($recordinfo->user_id != "") {
            $getuserbalance = $this->Common_model->select_where_row('user_accounts', array('uacc_id' => $recordinfo->user_id));
            $user_earnings = $getuserbalance->earnings + $recordinfo->earnings;
            $this->Common_model->select_update('user_accounts', array('earnings' => $user_earnings), array('uacc_id' => $recordinfo->user_id));
        }
        $result = $this->Common_model->select_update('businesses', array('is_approved' => $status), array('id' => $this->input->post('id')));
        die($result);
    }

    function delete_record() {
        $table_name = $this->input->post('table_name');
        $table_coloum_name = $this->input->post('table_coloum');
        $table_id = $this->input->post('id');
        $table_name = $this->input->post('table_name');
        if ($this->input->post('image_folder')) {
            $recordinfo = $this->Common_model->select_where_row($table_name, array($table_coloum_name => $table_id));
            if ($recordinfo->image != null && file_exists(FCPATH . 'includes/' . $this->input->post('image_folder') . '/' . $recordinfo->image)) {
                unlink(FCPATH . 'includes/' . $this->input->post('image_folder') . '/' . $recordinfo->image);
            }
        }
        $result = $this->Common_model->delete_where($table_name, array($table_coloum_name => $table_id));
        die($result);
    }

    function add_payment() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('payment_date', 'Payment Date', 'required');
        $this->form_validation->set_rules('amount', 'Amount', 'required');
        $this->form_validation->set_rules('payment_mode', 'Payment Mode', 'required');

        if ($this->form_validation->run() == true) {

            $payment_data = array(
                "user_id" => $this->input->post('reseller_id'),
                "date" => $this->input->post('payment_date'),
                "payment_method" => $this->input->post('payment_mode'),
                "amount" => $this->input->post('amount'),
                "netamount" => $this->input->post('final_amount'),
                "tax" => $this->input->post('tax_method'),
                "description" => $this->input->post('payment_description'));

            if ($this->input->post('transaction_id')) {
                $payment_data['transaction_id'] = $this->input->post('transaction_id');
            }
            if ($this->input->post('bank_transaction_id')) {
                $payment_data['bank_transaction_id'] = $this->input->post('bank_transaction_id');
            }
            if ($this->input->post('chequeno')) {
                $payment_data['chequeno'] = $this->input->post('chequeno');
            }
            $result = $this->Common_model->insert('reseller_payments', $payment_data);
            $userbalance = $this->Common_model->select_where_row('user_accounts', array('uacc_id' => $this->input->post('reseller_id')));
            $final_earnings = $userbalance->earnings - $this->input->post('amount');
            $updateuser = $this->Common_model->select_update('user_accounts', array('earnings' => $final_earnings), array('uacc_id' => $this->input->post('reseller_id')));
            die(json_encode(($result && $updateuser) ? true : false));
        } else {
            die(json_encode(false));
        }
    }

    function add_business() {
        $this->data['message'] = (!isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
        $this->data = $this->include_files();
        $this->load->view('admin/add_business', $this->data);
    }

}
