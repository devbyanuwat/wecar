<?php
class ShowProducts
{
    public $_conn;
    public function __construct($conn)
    {
        $this->_conn = $conn;
    }
    public function showProductActive()
    {
        $result = mysqli_query($this->_conn, "SELECT * FROM goods WHERE `goods_status` = 1");
        if ($result) {
            $res['status'] = "200";
            $res['msg'] = "success to get product.";
            $nums = 0;
            while ($data = mysqli_fetch_assoc($result)) {
                $res['data'][$nums] = $data;
                $res['data'][$nums]['img_src'] = $this->getGoodsImg($data['goods_id']);
                $nums++;
            }
            http_response_code(200);
        } else {
            $res['status'] = "400";
            $res['msg'] = "something wrong to get product.";
            $res['data'] = null;
            http_response_code(400);
        }
        return $res;
    }
    public function getGoodsImg($goodsId)
    {
        $sqlGoodImg = mysqli_query($this->_conn, "SELECT goods_img_src from goods_img WHERE goods_id = '$goodsId'");
        // $resultGoodImg = mysqli_fetch_assoc($sqlGoodImg);
        while ($resultGoodImg = mysqli_fetch_assoc($sqlGoodImg)) {
            $res[] =  $resultGoodImg;
        }
        return $res;
    }
}
