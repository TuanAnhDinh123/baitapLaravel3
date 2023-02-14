<?php
    namespace App;
    class Cart{
        public $products = null; //danh sach san pham
        public $totalQuantity = 0; //tổng số lượng của 1 sản phẩm trong giỏ
        public $totalPrice = 0; //thanh tiền của 1 sản phẩm.
        public function __constructor($cart){ //$cart là 1 giỏ
            if($cart){
                $this->product = $cart->products; 
            }
        }
        public function AddCart($product,$id){
            $newproduct = ['product'=>$product, 'price'=>$product->price, 'quantity'=>0];
            if($this->products){ //giỏ hàng đã có sản phẩm-> mảng product != null
                if(array_key_exists($id,$this->products)){
                    //danh sách sản phẩm trong giỏ hàng da tồn tại 1 sản phẩm có mã là $id
                    //=> lấy sản phẩm trong giỏ hàng ra để tăng số lượng lên 1.
                    $newproduct = $this->products[$id]; // lấy sản phẩm trong giỏ hàng ra.
                }
                $newproduct['quantity'] += 1; //tăng số lượng lên 1
                $newproduct['price'] = $product->price * $newproduct['quantity'];
                $this->products[$id] = $newproduct; //cập nhật sản phẩm vào lại giỏ hàng.
            }
        }
    }
?>