<?php

return [
    'alipay' => [
        'app_id'         => '2016082700321099',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvE0bodpkfoTRS+F2vribUItoGraWkLlOb5LoUgHZJLjTsHEGe0dlOSqctvqfMRIY2hTdnVMoaSfY/EL75HHnjSoCcu/TpaobuKL3b0wM9V7R9w2CA9KA5vvmAelHg/QJXTaItL07UZGT7SmMkTSCVFu/3SeQ8psJcIy6AYU2V7eBL1ErxTwktvvol+QpW/HW4/tVYCUsdRyK9KPLrotjnS+jssvATYKFvJdoOTOSCdRNYL/P435BU6vLYIgHEj93zyuOaHT4miWb0nacr7o+PGoOjL2hudiQx5q+VOEvgsLLpkD65/+vVQG/1G2UWe3I+cwVFLRJk1ONJEC+M+MbeQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAwbr6QLxjiMRtR5G4FarpDShguJghiqSucf1xjn52NMwLLezpJQMqMQpqPbHfzlXWsF6+8+NmFg0ldkr9CVOa7gpi3ynffoDju11aNrtrQaqTTV4PFtAoYfgkrHEi+xRu4wCJWZEZNUjwCzOgcq5mvG9PZ1Y2b/Oq8nuhLRnyg8nBYbRHLfPE9noKHNqmncZvB/D6R42u4vL65idJJyKB5Ab9pxozgAw5xSmuvSzfSKufSp/BRERRoLHK2KN/vAjxTW60G7AUlrbaxGMdbi/cHtl+Xge4qAEsUVXKDc3GH22qblf6fyWciegBO4WVsDe5nIK7JlFOQVVVMX834ZVlzwIDAQABAoIBAQCtB3kYdKpZr0cDUy0dfSblr5ijhoz+rZN5ECpqYJznDw81F5IskqUOZAT70XDZc2Vq5VSbtBCrxVYeT1+tAtUvomsoctfAvxGnePtoQwDLB7TEtyu27ngC+ISY1/usUVWwvfvu2V+wbdKnzpaRlx7/UlOTMjcwymt2Y+FSzQgDl5OI+lSp9/FBGkWdUws6moMGZ2w2wH+t3SwS41QPSnGmxtArH31hEj5DCRtqImyHkaZFkN6bdYek9lwdUDQB3I1OimcHhW3QSz02dCLxBlrr29Nxn33JS9NDOe6T+5lWFfNb4Fqr+q1XqDmdy4pxep84Q31SfK2KlheOQtXUE7qBAoGBAOQvpiRhhhh1+We+efb1wXqJZm0Y6sRvrbnkyz0H6PaY6hsgcUJvC5l2ZHTyqFqtjfw7oLsctSJLumvR0P8bfJuCpHmfcm4S7GvwY+zrW30Qgao7hWH0xrp2eghGkaiCGK/RkhXOG8dNs9ktAdrG5Oh8pOiZasvedT8ntHB+EoPvAoGBANlYKq3bnpCD/GJpd0/3EU65krfyHMcjB7OBBEQ7Srgd4TnQKbRwKc0u6FxWJcaX/gaafTwI8awAYdyiwS1xQBuyvKDwnA9v2gN6FHlF0C6Eh62WxVf7hAFI1HQ6LdftnZK7r7VZ3j2YRLNIkE6t/w+Q2Vz/tJt1YIA+UQLAP9whAoGAexvyCSLMlBniK0SqzMCeWBwVNLsCvmR6WBbGR/EikRjDBUulj3AV0//6BtZ8Wh/UwMby2sCMQSqWM2GJ3njX65a6YhvSQuzWvQ1+++2m+HyVWGCwf77uEN+myxw3rbAy3Xi11inS9t5HL96GZ6BzE7NbzVooMkGdBCvJv/9kweUCgYEAp2nLTin55JVV5bQZTEYiVcKJqhjbY+SuvOznDWuibVnOr8qRJUS0XjEAmIdfB67x48JCLukwxm1w9BOFu2wdlnhB5bIQc6+TfdQeSx+kcQByxhp5ngDFuHuR8okR4N5N3sWlXYqArm9Ik9SUG5bY/fN0CreINarfD0lw+y58wiECgYBiMubxUcOnJ0rVUdg29MhD+0YQVoQOFivqos3hTM9QlsGPvdX/I8bW3soJj/FJy4/B5qACq6qkK0rC6cKOCy7gU/HebJAOO/Vt6mK18UYnpENO+O2JBvl/slCvOkQ7pYC6GZA5UC/2Qcgdf6OJQZf2ip9UyvtDhxpGbtR8EaBSVw==',
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
