<?php

class UserController extends User{

    private $id;
    private $nickname;


/*     public function __construct($id, $nickname){
        $this->id = $id;
        $this->nickname = $nickname;
    } */

    public function outputUserList(){
        $this->nickname = $this->getUserNickName();
        $this->id = $this->getUserId();
        $output = '';
        $temp ='<div class="message" onclick = "clickUser('. $this->id .')">
                    <div class="avatar">
                        <img src="img/alien.jpg" alt="This is the photo">
                    </div>
                    <div class="friend">
                        <div class="user">'. $this->nickname .'</div>
                        <div class="text">Hello</div>
                    </div>
                </div>';
        $output .= $temp;
        $output .= $temp;
        $output .= $temp;
        $output .= $temp;
        $output .= $temp;
        $output .= $temp;
        $output .= $temp;
        $output .= $temp;
        $output .= $temp;
        $output .= $temp;
        $output .= $temp;
        $output .= $temp;
        $output .= $temp;
        $output .= $temp;
        $output .= $temp;
        $output .= $temp;
        $output .= $temp;
        $output .= $temp;

        return $output;
    }



}
