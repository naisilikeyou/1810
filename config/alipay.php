<?php
//return [
//    'pay' => [
//        // APPID
//        'app_id' => '2016092700605499',
//
//        //@异步 支付宝 支付成功后 主动通知商户服务器地址  注意 是post请求
//        'notify_url' => '1111111111111',
//
//        //@同步 支付宝 支付成功后 回调页面 get
//        'return_url' => 'http://www.weishop.com/paysuccess',
//
//        // 公钥（注意是支付宝的公钥，不是商家应用公钥）
//        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA08ekJ9RAY0nW17+xAi0rSGLl3pUA7fDrkyD1cm9dN1JK0RERL7KMV3ykfNKdtbmMNh4wVuzMeE4FrDvES9apJPVLNwzXCzG4aUrVv66hMKb/jtHDr6cx1vz2ST9x6xlopCspfgHxxr+PgEkjxBZA7oiCyB/hYtZ4aDx+WJRlrhWYFuXqDFrhH9r+oAE9UMULBG3GkW4WrbypnPle0Y0qPruO4hzHI/t8YVV8Rl4oju5qnpoNPjeRqyWaq778ZLXgDYzow3OJT6jnmM2BhxV4hsKed0wIV0y6hMJpCsmHrBOBWcRs4pOULbKVh+xdVXyGyT8lSX55aYlS9SCcl44muwIDAQAB',
//
//        // 加密方式： **RSA2** 私钥 商家应用私钥
//        'private_key' => 'MIIEpAIBAAKCAQEA08ekJ9RAY0nW17+xAi0rSGLl3pUA7fDrkyD1cm9dN1JK0RERL7KMV3ykfNKdtbmMNh4wVuzMeE4FrDvES9apJPVLNwzXCzG4aUrVv66hMKb/jtHDr6cx1vz2ST9x6xlopCspfgHxxr+PgEkjxBZA7oiCyB/hYtZ4aDx+WJRlrhWYFuXqDFrhH9r+oAE9UMULBG3GkW4WrbypnPle0Y0qPruO4hzHI/t8YVV8Rl4oju5qnpoNPjeRqyWaq778ZLXgDYzow3OJT6jnmM2BhxV4hsKed0wIV0y6hMJpCsmHrBOBWcRs4pOULbKVh+xdVXyGyT8lSX55aYlS9SCcl44muwIDAQABAoIBAQCxtetICNHm/0UrUg3k96ZEXcjq2DopcGsd0SBl4JFmJMXnXd0AG2Gs4Eje/ZWdso+3sel6Z8bEhSQ5fQWhZgYVn0h4b2vcVuKaaFOpP46/VsNIQzlkInauIyNAH98mGvI2IIn21QbfckumqLk8iDgAccjcyfPFjpcHUQvspMoWIz0lwPZtIcEcBIsF/YpxY5dSDvqtaNgPAZv5uAd9SEOHepnRuU0YCYb4LRR/XDsZSgyWfTZRUUdWUiZkEMbDMMXl1t9coQWSNo24AGeLQgPSB0kIrBhqL9LE6sZ4oaki1nklGwYfTPi8HKn/xtl/0bQi2C39HKIlvnDKB/V7JLahAoGBAPgg9xdvvWFlPb/Yv9SrQOgG7nCm++C3EJ2aNCe7U5LstdirUXM2VDMJ9N/F4FTx3XMD9BSSAXfvBXkT5A2Uh/pypEBATJUvCplZPzrYHXgU9xof30VzWJ8Hzf66Xpx3C8EvffUkOUP0rM4JlQ3Lgc0Pk+ZNgFIGMAaBKO1qrV6DAoGBANp/fT0SiURXQiZ5+p88l1JOSgNhQS+uEGfBeCGVa7jk0s6wVR0V6FAaEfJ1yBAyVtSwTffvSuMO+B9Ub288qa3TTkznNySZccHSQ4vGfPayVjkpn4iW2Jw0yPCf3pawC+mPUSss/S8oUrLoJX7leTjcjWwAg70ciI3kPA9aVqFpAoGBAIOQDxO5JqQGp0gaqBQePYsJadIHaBQNXN0Dz1WlyLllk0HwDH7XNqvdQp6H79t6Zt2+IePqSqcJ8E/zkP72W2ca9CYxMaoESE1o+dK8llt+WkrazWqorzubSskejl3N7UigYtvhOg/jIuEYSZUH66oL8XKyczCKoVpBj67a2lP7AoGAasHB2lY1NWwBCTWuK6F6Oh/Ab/hT1k0Q/PD9lkMgl/1NtulXHNf4YzLps/KyZp+B53ehENQdXeWRfBVQQSR9r03AQzjxq3NBrrbig+feZNbr5BAfP6ice24bA97I7g1kNKDuws6/ggwMpBdjQqYyXYL9olh6BatsWQ+7/LBiBYkCgYBKSQE0yJmooInAc5mbhqmSuTnrqt0z7ZUQFNTKNorJY1t/wa0xnEgnXPh36x1gmhNoFnkLHGhXms9OD5vPc5VSX2n7tsNcl0mYhCYng1QdXVRHdFZa3bQ7sUrIzFUk1dBMOmbFDOXLN0je38Sl4o4mi7tbPm/K8YiJ6+ahGD+vBg==',
//
//        'log' => [ // optional
//            'file' => '../storage/logs/alipay.log',
//            'level' => 'info', // 建议生产环境等级调整为 info，开发环境为 debug
//            'type' => 'single', // optional, 可选 daily.
//            'max_file' => 30, // optional, 当 type 为 daily 时有效，默认 30 天
//        ],
//        'http' => [
//            'timeout' => 5.0,
//            'connect_timeout' => 5.0,
//            // 更多配置项请参考 [Guzzle](https://guzzle-cn.readthedocs.io/zh_CN/latest/request-options.html)
//        ],
//        'mode' => 'dev', // optional,设置此参数，将进入沙箱模式
//    ]
//];

return [
    //应用ID,您的APPID。
    'app_id' => "2016092500594950",


    //商户私钥
    'merchant_private_key' =>"MIIEogIBAAKCAQEArQQagofkcmY44SxOHHU9Z3G8Mwru3n4HjyoHtWtPXk4Az2qeFxEpUNYCBq06v89BxDtag+Xo3lOfWOb6s7d3aypJ7H9DVVEFenZG1Gal6LExKf+5+XPXw6v/5Ud5C+ZXwswFBKD1KBGgNE92Q1JPuDATGx6AW78YmzwO2HXIlMvVmLoxLAr/yQaits2CpQn96EQfeMOcodsIcv7iGBrdLK2DeF3wdx+Zc2gZQVrAFmrguEdCbCmkWVboXsgoB+1gDG/2N9WoPvSI8fqhdSS01Oq9IUb7fE9rcFaWD1lbe3FcgDiCNBUOK2L98m05vbd8DYmddvFOY1L9SiBseLszzQIDAQABAoIBAG/bEVCGjrkvQWLChBV97p7sNyJA1UHe9QAnyigOIpfzki6G3YJIRA/Q7Cpo4GyVkA1P2isf/reOFJ0jZ728xWXxRy2w8VU9Nm9//Dbhzi1sMT7X5+JQdJQ6pQwUczuwRdjYkf32Gck36/0lym2nz4Zi/lcwFwg5uazS3T4wl+cp+MlcHwatxORnoHD9OvgVi88UGCEt22KJZycLkvEeRPdkEUWcjUkOHKIsSZonQiPyXKbwKxF56I9VgZb0sHa8MhQ8Ev+R0plCg9Q+QzAlLV30z1Y2Kq0W+NpLthxLHtQwTJFr8LrAeDC3OHhk2KJq2DuQ4hskUSsxlznZrqO8JbkCgYEA2Eq5O7++KzARmzlPqtBD65WQskyHPeOCa+hR6TQQv7XSBVD+SKEtETDBMr01Y1cV9qqYPC5aBaPK1dzaUq1AD3oGtIKxbuxBYZngPgL9Wd7lC2AZ0icph92DaFBzmEPFew8is/4I2FQpHeAww1A99jpKPKFA/FU6u5XNpwfks4MCgYEAzMeAyxBPzkOwbFPgTc/Ej8y87eVsbMI1UOGE5tVD+Q6jd55ID+rz+/aQvV4QYfXdJVqeIYFRjBFvBEgnVSueKyUlgZX74u2GkbQAYxfPtn2amRKmXvQzNLXH1E/TaYi2TfhTk/+KoK40UlDfLgll4d3f8M25CxareUg9BF2kym8CgYBwQagNyKCMjbA1nfMpNlpqBQBKacmvZ0sjcjpBDNK8jUNpmvW/AFgBmgpLqUPyQRqXIUdNxMjYMIBvquZtDpo27iBYw5QPe/MbEt/9j1OqtzKtSr1cAxNc/qzbERZNqq7uBZb/UBOLI3MLnHXyiMz/5JTvDspJrHqFLWTFEiWyvQKBgC3ZCPPt7gA/VXObf9/MAbU0YKRetlzPSoKWS1wnKXXMmjrA3F97+i5ScOuE8OQN2PpxBHB59JkImjN6OBwwjNQaGACgZOnUxkk+5MtK3H1+N6vH6ineQMyvWlMloC7DphVk4MmE8DOzbRF0+9Lh1caxF19hn+lkpPWdf9PHZ4rPAoGARyntJicX4lB+uNyuP/yS9tz7fpj6C7YWtXJeg9tFPD9+GrtDqieU4rtntNLxZ4ombmr6q0zjW8BG7+9AxxIFbxjPCQI5Ug8Mb3ZG29Pg0dx1DsjXfiNJfNGk3Gmwg5N3U8OWenpGvgRk4EAf4OML+/Bobhm/9aRf/RzRqMiJx7Y=",

    //异步通知地址
    'notify_url' => "http://localhost/alipay/notify_url.php",

    //同步跳转
    'return_url' => "http://localhost/alipay/return_url.php",

    //编码格式
    'charset' => "UTF-8",

    //签名方式
    'sign_type'=>"RSA2",

    //支付宝网关
    'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

    //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
    'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA9M8ap/j2MgfAQkAfnceA/yqnP/3YNTYswINGkW2C84d5p7Fohf9fqZrvObIQ8yAiropRFFsstNG3uR2TGjpH2zLhxYApn4FxDrbCyn/PcL9U46AkYADTrDoQCNq+YKpIjlO8AptLx6/kb6xmMQ5jqX9cWtQLmeOeldqHuRJ4UMLbxSt2WvCqK9YMJC/RF9XYHcUn/4tljSOgcQeJilAtsxxHDnKCeP1Z9kV1iuzJlZEqdoutLIt/JJSxOK1g8l7k1RQjSjOmqHR/nasq6NFke8fyHSPQ56eZcJE3Ywgwr2rUpYdHVHPHX7l/OiOGLKYk0ElD2HwEL4YmHKE2E9fQCwIDAQAB"

];