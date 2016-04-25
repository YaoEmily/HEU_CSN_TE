<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('./application/libraries/duanxin/TopClient.php'); //这个是你下面实例化的类  
include('./application/libraries/duanxin/ResultSet.php'); //这个是topClient 里面需要实例化一个类所以我们也要加载 不然会报错
include('./application/libraries/duanxin/RequestCheckUtil.php'); //这个是成功后返回的信息文件
include('./application/libraries/duanxin/TopLogger.php');   //这个是错误信息返回的一个php文件
include('./application/libraries/duanxin/AlibabaAliqinFcSmsNumSendRequest.php'); //这个也是你下面示例的类
class Messageli {


	public function sendstart($name,$ename,$date,$stime,$room,$tel){
		$c = new TopClient;
		$c->appkey = "23350504";  //App Key的值 这个在开发者控制台的应用管理点击你添加过的应用就有了
		$c->secretKey = "c76e5171f55fdc4dc16d22829b34b256"; //App Secret的值也是在哪里一起的 你点击查看就有了
		$req = new AlibabaAliqinFcSmsNumSendRequest;
		$req->setExtend("123456"); //这个是用户名记录那个用户操作
		$req->setSmsType("normal"); //这个不用改你短信的话就默认这个就好了
		$req->setSmsFreeSignName("监考管理系统"); //这个是签名


		$req->setSmsParam("{'name':'$name','ename':'$ename','date':'$date','stime':'$stime','room':'$room'}"); //这个是短信签名
		$req->setRecNum("$tel"); //这个是写手机号码
		$req->setSmsTemplateCode("SMS_8185063"); //这个是模版ID 主要也是短信内容
		$resp = $c->execute($req);
	}


	public function sendend($name,$num,$tel){
		$c = new TopClient;
		$c->appkey = "23350504";  //App Key的值 这个在开发者控制台的应用管理点击你添加过的应用就有了
		$c->secretKey = "c76e5171f55fdc4dc16d22829b34b256"; //App Secret的值也是在哪里一起的 你点击查看就有了
		$req = new AlibabaAliqinFcSmsNumSendRequest;
		$req->setExtend("123456"); //这个是用户名记录那个用户操作
		$req->setSmsType("normal"); //这个不用改你短信的话就默认这个就好了
		$req->setSmsFreeSignName("大鱼测试"); //这个是签名


		$req->setSmsParam("{'name':'$name','num':'$num'}"); //这个是短信签名
		$req->setRecNum("$tel"); //这个是写手机号码
		$req->setSmsTemplateCode("SMS_7756191"); //这个是模版ID 主要也是短信内容
		$resp = $c->execute($req);
		return $resp;
	}

}