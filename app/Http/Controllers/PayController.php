<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class PayController extends Controller
{
    //手机支付
    public function alipay(Request $request)
    {
        $order_id = $request->order_id;
        $data = DB::table('order')->where('order_id',$order_id)->get();
        $path = base_path();
        $config = Config('alipay');
        require_once $path.'/app/libs/alipay/pagepay/service/AlipayTradeService.php';
        require_once $path.'/app/libs/alipay/pagepay/buildermodel/AlipayTradePagePayContentBuilder.php';

        //商户订单号，商户网站订单系统中唯一订单号，必填
        $out_trade_no = $data[0]->order_no;

        //订单名称，必填
        $subject = trim('商品支付');

        //付款金额，必填
        $total_amount = $data[0]->order_amount;

        //商品描述，可空
        $body = '';

        //构造参数
        //php中new 一个类如果不写命名空间，就默认为与当前同命名空间
        $payRequestBuilder = new \AlipayTradePagePayContentBuilder();
        $payRequestBuilder->setBody($body);
        $payRequestBuilder->setSubject($subject);
        $payRequestBuilder->setTotalAmount($total_amount);
        $payRequestBuilder->setOutTradeNo($out_trade_no);

        $aop = new \AlipayTradeService($config);

        /**
         * pagePay 电脑网站支付请求
         * @param $builder 业务参数，使用buildmodel中的对象生成。
         * @param $return_url 同步跳转地址，公网可以访问
         * @param $notify_url 异步通知地址，公网可以访问
         * @return $response 支付宝返回的信息
         */
        $response = $aop->pagePay($payRequestBuilder,$config['return_url'],$config['notify_url']);

        //输出表单
        var_dump($response);
    }

    //同步回调
    public function re()
    {
        echo 1;
    }

    //异步回调
    public function notify()
    {
        echo 2;
    }
}