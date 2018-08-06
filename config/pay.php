<?php

return [
    'alipay' => [
        'app_id'         => '2016091800541559',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAu6i+RQIGaoubNiG+rG7sONSJ6MhO24v3NeqRcsluxlks2me5JRI4FTp5n7k62NvGaBaoRiLtaim5Q5PmU0jO/u6bEEWmSQR9PozbpQZOq5oPUMmv1WaD5e+yiKqb4LwxZYEHhCIKKRRxIMS+4xCOYzjssjWiaQryE2LZNkvxMbu0c7gkrMuYsYwrwlUABWfek7qeDcfdSuS+Z5svM8O+KKAtYkKeIR+E0SR/g5+eUzm9jdRyL0xaTJh/eYHg5sAovH8O0ePyCGo019gfocf+Q+GjBVRpg1uwbR1Sp9+wJKvCPEXRVwjLcY3tNH89Y0ZV3PTOmSPmf8OUPmB6MU+oIQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAyD/M1OfEutemkJWizKUUfISD0KidrFU8OyE732smk+AlG/I0nNm7B2Mdm+HGMcqAybdfl+1qkQnXfZIgEIIp8pZXoLGg+0RCO3QIH6m21ZOXRR1xxKC+q1hbfELO17KUaMqfe/r+NcZwXrcleECrNz9SyO3fbRlzVHx2mYIt4dvPo9XDbzPkwXtST8Mwp/coH7lxm6i4ha4WHAtxg19pRflj54yRoh7gDLQBdO4u0pnETZHmgfpfCTwEDKbHjK0kEhfq9MZ4qDE6LxXjzO9pJddbCsexEmPYItRR9UbRLj0ZpkQW1QQHzd/6MdzjPt15N+t0emv2pusdYWDxWKwooQIDAQABAoIBACczxkfP78WcPjGD+dESaEZQMvYAbI22SgpRYUVF1tGQSfOEoSQrw9+YWc2Qj5pjyH609XPquLgYMyWUG87fjJK/N/xvidJm9IhrGMQKF48MS8ruDr2tsmYc8BwNgCzd+wvgzwQYiPfCF3GTbTRzhJFWRkCrwNe86cUacKVwxMa4RtB0fJXnwKzxjUsoUL5AsXMTm+H3ukRfYkvpxeKhC37DeznBCx8fTZyrpn/cFCuKOwd+k/SCoKnUWKXFdbTTTi5PeerZCb3GkST8swkR2d237so8u9xHNYvLNvaiQH6QqvuVOuVkC9VNDHXliqFJBqk0K/2XUhfahOWAD8l76KECgYEA7vagyHwT7VSsp0V2omM/IAT1EP0Sy9SW4DZ+I2K6ubkIFF5fuVq+m/4dUbP9eXEhvr+NrqooShi257Umb/lxpxPSu/Z7aSvf89FlWXd1KsSPoOEwQgZAKRbbrb4l2JflM6lhQ1w+qpDur6i24PHOFvyMQzUKuKxHequEuWLdBg0CgYEA1oaXaKUPohdStsIyI78pxWKyhSRwkUOYIo5a3g/naClleofF6Jjlf7e6GaKjxKwqbqJL+x+kAZ2dNGcutDE95whLKjztY2SG7kLqXUi6yy25nDB3BxxcJ6n8VnDPLiAeAMzLZDM8LmagkKwles1Ti4fQ5u4UB4XwwoP1QRFj++UCgYEAlje3jxBgvnrSJjzGfQKCtjAnlkxgun2jcsMOvFPeKc4lRBineC+RTyKJb8kD+ImjuvNTr48L0LiEklgQF6fpSCxv9vTVU6HfILhrS7iKkR4LZAjrezXOs4XJBwlXZTbnQHijyeJ9CmAdi5M1k2auNUkBK2Z2nOy/6l9UCe4aHykCgYAyNOm2mfrgqqi3ERf++bxi78hsFK0rsjAm1j45/mrgG+AeHyyYVUBQ9cTePwwo+Uos/lrd+Pe/UQ37t7JchbHBIlXFGuFMA7j4hjynfGALMTZhcY5J4b9HoSbnbBtw5h9ffI6VctBA48/sS/2xkeBdpXmksk+JuzUvsQZzJgjKaQKBgCCQFZXlc/50R3D3TZ+9ZEhvkwnaQK3LsuFMQauZzwubwpS5OHg4zu/RU392LeqCpgkaaHOQhp/C+e0WiFlp/Mdf55a6Rr89zou32ppM0yxm25mGbt+ekfpj9wsRM6qCh35LEeEBBgNi2mAKxIzfUFkLgAEQ7FMBtmwEXFyOI3MT',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];