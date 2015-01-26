<?php  ob_start(); if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class thriftshop extends CI_Controller {

      public function __construct()
      {
             parent::__construct();		
              $this->load->database();
              $this->load->model('store_model');
              $this->load->helper('url');

     }

     public function index(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
        $data['filterslatest'] = $this->store_model->get_filtersLatest();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

 public function indexFlat(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
        $data['filterslatest'] = $this->store_model->get_filterflats();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

public function indexFurn(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
        $data['filterslatest'] = $this->store_model->get_filterfurniture();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}
public function indexVeh(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
        $data['filterslatest'] = $this->store_model->get_filtervehicles();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

public function indexEle(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
        $data['filterslatest'] = $this->store_model->get_filterelectronics();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}
public function indexSG(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
        $data['filterslatest'] = $this->store_model->get_filterSportingGoods();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

public function indexjobs(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
        $data['filterslatest'] = $this->store_model->get_filterJobs();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

public function indextutors(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
        $data['filterslatest'] = $this->store_model->get_filterTutoring();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

public function indexbooks(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
        $data['filterslatest'] = $this->store_model->get_filterBooks();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

public function indexMis(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
        $data['filterslatest'] = $this->store_model->get_filterMiscellaneous();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

public function indexComp(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
        $data['filterslatest'] = $this->store_model->get_filtercompetitions();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

public function deletefromwish(){
  $this->store_model->deletefromwish();
  redirect('thriftshop/wishlist');
}

public function wishlist(){
$user = $this->session->userdata('id');
if( $user == null) {
redirect('user/signup');
} else{

        $data['title'] = 'wishlist';
        $data['wishlist'] = $this->store_model->get_wishlist();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/wishlist', $data);
        $this->load->view('templates/footer2');
      }
}

public function singleview(){
        $data['title'] = 'Item view';
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/singleview', $data);
        $this->load->view('templates/footer2');
}

public function view($slug,$id)
  {
    $data['filter'] = $this->store_model->get_product($slug);
    $data['comments'] = $this->store_model->get_theproduct_comments($id);
       $data['seller'] = $this->store_model->get_seller($id);

      $this->load->helper('form');
      $this->load->library('form_validation');

    if (empty($data['filter']))
    {
      show_404();
    }

    $data['title'] = 'Item';
    $this->form_validation->set_rules('rating', 'Rating', 'required|greater_than[0]');

    if($this->form_validation->run() === FALSE)
    {
    $this->load->view('templates/header2', $data);
    $this->load->view('thriftshop/singleview', $data);
    $this->load->view('templates/footer2', $data);
    
    }
    else
    {
      
     
      $this->session->set_flashdata('feedback', $addeditem . "Thank you for rating!");
      // $this->load->view('templates/header');
      $name = $slug;
      $add = "thriftshop/".$name; 
      // $this->load->view('store/success');
      redirect(base_url()."index.php/". $add);
    }
    
    
    
  }

  public function likeup(){
      $this->load->model('store_model');
      $this->store_model->likeup();
     redirect('');
  }

  public function dislikedown(){
      $this->load->model('store_model');
      $this->store_model->dislikedown();
    
  }

 

  public function ShopSearch(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
        $data['filterslatest'] = $this->store_model->get_filterSearchHD();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

public function shop(){
        $data['title'] = 'filter';
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/shop', $data);
        $this->load->view('templates/footer2');
}

public function support(){
        $data['title'] = 'support';
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/support', $data);
        $this->load->view('templates/footer2');
}

public function get_filteredpage(){
 $this->load->model('store_model');
 $data = array();
 $data['title'] = 'Lorem ipsum';
 $data['list'] = $this->store_model->get_filters();
 $this->load->view('thriftshop/filteredpage',$data);
}

public function get_filteredpage2(){
 $this->load->model('store_model');
 $data = array();
 $data['title'] = 'Lorem ipsum';
 $data['list'] = $this->store_model->get_filters2();
 $this->load->view('thriftshop/filteredpage',$data);
}

public function get_filteredpage3(){
 $this->load->model('store_model');
 $data = array();
 $data['title'] = 'Lorem ipsum';
 $data['list'] = $this->store_model->get_filters3();
 $this->load->view('thriftshop/filteredpage',$data);
}

public function get_filteredpage4(){
 $this->load->model('store_model');
 $data = array();
 $data['title'] = 'Lorem ipsum';
 $data['list'] = $this->store_model->get_filters4();
 $this->load->view('thriftshop/filteredpage',$data);
}

public function get_filteredpage5(){
 $this->load->model('store_model');
 $data = array();
 $data['title'] = 'Lorem ipsum';
 $data['list'] = $this->store_model->get_filters5();
 $this->load->view('thriftshop/filteredpage',$data);
}

public function get_filteredpage6(){
 $this->load->model('store_model');
 $data = array();
 $data['title'] = 'Lorem ipsum';
 $data['list'] = $this->store_model->get_filters6();
 $this->load->view('thriftshop/filteredpage',$data);
}

public function get_filteredpage7(){
 $this->load->model('store_model');
 $data = array();
 $data['title'] = 'Lorem ipsum';
 $data['list'] = $this->store_model->get_filters7();
 $this->load->view('thriftshop/filteredpage',$data);
}

public function Add_toWishlist(){

$this->load->model('store_model');
$data = array();
$this->store_model->addWish();
$this->session->set_userdata('fancy', 'item has been added to your wishlist');
redirect('thriftshop');


}



}