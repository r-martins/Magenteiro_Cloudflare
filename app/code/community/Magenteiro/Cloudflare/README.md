# Magenteiro_Cloudflare

O cloudflare fará com que o IP detectado por $_SERVER['REMOTE_ADDR'] seja sempre o do Cloudflare.

Este módulo altera o $_SERVER['REMOTE_ADDR'] pelo $_SERVER['CF_CONNECTING_IP'] (ip verdadeiro) fornecido pelo Cloudflare.

É possível também forjar o IP usando o cookie `MAGENTEIRO_CONNECTING_IP`.

O módulo pode ser desabilitado em Web > Cloudflare.