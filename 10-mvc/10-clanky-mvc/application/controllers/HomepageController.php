<?php

/**
 * Class HomepageController - controller pro zajištění funkcionality homepage
 */
class HomepageController extends Controller{
  /**
   *  Funkce pro vypsání HP
   */
  public function defaultAction(){
    $this->setRedirect('/article/list');
  }


}
