<?Php
$emails = "admin@z-files.site";  //  Изменить на свою почту на хостинге
$subjects = $_POST['mmail'];
$messages = $_POST['TextArea1'];
mail($emails, $subjects, $messages, "Content-type:text/plain; Charset=windows-1251\r\n");
             include_once("index.php");
                     if ($MyLang == "ch") {
                    echo "<script>swal(
  '成功',
  '您的信已發送，我們會盡快給您回复。',
  'success'
);</script>";
                     }
                       if ($MyLang == "en") {
                     echo "<script>swal(
  'Success',
  'Your letter has been sent and we will reply to you shortly.',
  'success'
);</script>";
 }
   if ($MyLang == "ru") {
                     echo "<script>swal(
  'Успех',
  'Ваше письмо отправлено и мы в скором времени Вам ответим.',
  'success'
);</script>";
 }
    if ($MyLang == "es") {
                     echo "<script>swal(
  'Éxito',
  'Su carta ha sido enviada y le responderemos en breve.',
  'success'
);</script>";
 }
                        if ($MyLang == "it") {
                     echo "<script>swal(
  'Successo',
  'La tua lettera è stato inviato e vi risponderemo al più presto.',
  'success'
);</script>";
 }
                        if ($MyLang == "de") {
                     echo "<script>swal(
  'Erfolg',
  'Dein Brief wurde gesendet und wir werden Ihnen in Kürze antworten.',
  'success'
);</script>";
 }
exit;
?>