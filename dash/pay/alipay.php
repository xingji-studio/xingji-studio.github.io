<?php

    goZfb('mobileSendTime=-1; credibleMobileSendTime=-1; ctuMobileSendTime=-1; riskMobileBankSendTime=-1; riskMobileAccoutSendTime=-1; riskMobileCreditSendTime=-1;riskCredibleMobileSendTime=-1; riskOriginalAccountMobileSendTime=-1; cna=t+edHJ6WTDkCAd3fZP+60BFA; __TRACERT_COOKIE_bucUserId=2088542783696394; tree=gzmsmop-contentmngsff%01db6dc294-2ad5-4f8a-99bd-9c3a814c99e8%012; csrfToken=ejaqeY4S6HgMZ65KSzhGKink; ctoken=hQaURHD57H_HWVEG; zone=GZ00C;ALIPAYJSESSIONID=RZ42HJTjTEqmpXvafGXhh4BcjuFXD6authGZ00RZ54; spanner=wn3G9EX+Is8BWQdTvnkTG4UWebzwDDvk4EJoL7C0n0A=;rtk=VQyjGkC0YmcTE3ehBQIozEU6JTj4AN7EIQ1J5TFYzN0iL//4hDW', 'hQaURHD57H_HWVEG', '2088542783696394');
    
    //调用支付宝交易订单列表接口
    function goZfb($cookie, $token, $userId)
    {
        $url = "https://mbillexprod.alipay.com/enterprise/tradeListQuery.json?ctoken=" . $token;
        $header = [
            'referer: https://mbillexprod.alipay.com/enterprise/bizTradeOrder.htm',
            'origin: https://mbillexprod.alipay.com',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36'
        ];
        $data = [
            'billUserId' => $userId,
            'pageNum' => 1,
            'pageSize' => 20,
            'startTime' => date('Y-m-d') . ' 00:00:00',
            'endTime' => date("Y-m-d", strtotime("+1 day")) . ' 00:00:00',
            'status' => 'ALL',
            'queryEntrance' => 1,
            'entityFilterType' => 1,
            'sortTarget' => 'gmtCreate',
            'activeTargetSearchItem' => 'tradeNo',
            'tradeFrom' => 'ALL',
            'sortType' => 0,
            '_input_charset' => 'gbk'
        ];
        $res = go_curl($url, $data, $header, $cookie);
        
        if ($res) {
            $tradeList = $res['tradeList'];
            foreach ($tradeList as $trade) {
                echo "订单号：" . $trade['tradeNo'] . "，金额：" . $trade['totalAmount'] . "元" . PHP_EOL;
            }
        }
    }
    
    //发送Http请求
    function go_curl($url, $post = 0, $header = 0, $cookie = 0, $nobaody = 0)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        if ($post) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        if ($header) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        }
        if ($cookie) {
            curl_setopt($ch, CURLOPT_COOKIE, $cookie);
        }
        if ($nobaody) {
            curl_setopt($ch, CURLOPT_NOBODY, 1);
        }
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $ret = curl_exec($ch);
        curl_close($ch);
        return $ret;
    }
 
?>