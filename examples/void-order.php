<?php
/**
 *
 *   Posta ve Telgraf Teşkilatı A.Ş. Genel Müdürlüğü adına Alttantire Yazılım Çözümleri tarafından geliştirilmiştir.
 *   Tüm hakları Posta ve Telgraf Teşkilatı A.Ş. Genel Müdürlüğü'ne aittir.
 *
 * @author      Alttantire Yazılım Çözümleri <info@alttantire.com>
 * @site        <https//akilliesnaf.ptt.gov.tr/>
 * @date        2022
 *
 */

include "../src/Gateway.php";

/*
 * Siparişi iptal eder ve tutarı müşteriye iade eder
 */

//### Sanal POS Üye İşyeri Ayarları
/*
 * apiUser: SMS ile iletilen ApiUser bilgisi
 * clientId: SMS ile iletilen clientId bilgisi
 * apiPass: SMS ile iletilen apiPass bilgisi
 *
 * Environment:
 * TEST işlemleri için sunucu IP adresinin PTT Test Ortamına erişim yetkisi gereklidir.
 * Erişim tanımı için PTT Akıllı Esnaf destek merkezine ulaşınız.
 *
 *  ** "LIVE" = "https://aeo.ptt.gov.tr/api/Payment/"
 *  ** "TEST" = "https://prepaeo.ptt.gov.tr/api/Payment/"
 */

$apiUser = "Entegrasyon_01"; // Api kullanıcı adınız
$clientId = "1000000032"; // Api müşteri numaranız
$apiPass = "gkk4l2*TY112"; // Api şifreniz
$environment = "https://prepaeo.ptt.gov.tr/api/Payment/";

//### Sipariş Bilgileri
$orderId = "20221011999"; // Sipariş numarası

//### API Gateway
$gateway = new Gateway($environment, $clientId, $apiUser, $apiPass);
$paymentCheck = $gateway->void($orderId);

echo "<pre>";
print_r($paymentCheck);
