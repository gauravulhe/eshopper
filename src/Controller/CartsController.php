<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class CartsController extends AppController
{
    
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);

        return $this->Auth->allow(['logout', 'display']);
    }

    /*
     Login method
    */
    
    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function add() 
    {
        $this->autoRender = false;
        if ($this->request->is('post')) {
            //debug($this->request);exit;
            $this->Carts->addProduct($this->request->data['product_id']);
        }
        echo $this->Carts->getCount();
        return $this->redirect(['controller' => 'Products', 'action' => 'cart/1']);
    }

    //  public function index() {
    //     $carts = $this->Carts->readProduct();
    //     //debug($carts);exit;
    //     $products = array();
    //     if (null!=$carts) {
    //         foreach ($carts as $productId => $count) {
    //             $product = $this->Carts->readProduct(null,$productId);
    //             $product['Product']['count'] = $count;
    //             $products[]=$product;
    //         }
    //     }
    //     //debug($products);exit;
    //     $this->set('product', $products);
    // }
    
}
