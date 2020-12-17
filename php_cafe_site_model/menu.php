<?php
class Menu {
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;
    private static $count = 0;

    // コンストラクタ
    public function __construct($name, $price, $image) {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;

        self::$count++;
    }

    // メソッド
    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getTaxIncludedPrice() {
        return floor($this->price * 1.08);
    }

    public function getTotalPrice() {
        return $this->getTaxIncludedPrice() * $this->orderCount;
    }

    public function getImage() {
        return $this->image;
    }

    public function setOrderCount($orderCount) {
        $this->orderCount = $orderCount;
    }

    public function getReviews($reviews) {
        $reviewsForMenu = array();
        foreach ($reviews as $review) {
            if ($review->getMenuName() == $this->name ) {
                $reviewsForMenu[] = $review;
            }
        }
        return $reviewsForMenu;
    }

    // クラスメソッド
    public static function getCount() {
        return self::$count;
    }

    public static function findByName($menus, $name) {
        foreach($menus as $menu) {
            if($menu->getName() == $name) {
                return $menu;
            }
        }
    }
}

?>