<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('pl', array (
  'validators+intl-icu' => 
  array (
    'post.blank_summary' => 'Dodaj podsumowanie Twojego artykułu!',
    'post.blank_content' => 'Treść artykułu nie może być pusta!',
    'post.too_short_content' => 'Treść artykułu jest za krótka (minimum: { limit } znak)|Treść artykułu jest za krótka (minimum: { limit } znaki)|Treść artykułu jest za krótka (minimum: { limit } znaków)',
    'comment.blank' => 'Pole komentarza nie może być puste!',
    'comment.too_short' => 'Twój komentarz jest za krótki (minimum: { limit } znak)|Twój komentarz jest za krótki (minimum: { limit } znaki)|Twój komentarz jest za krótki (minimum: { limit } znaków)',
    'comment.too_long' => 'Twój komentarz jest za długi (maksimum: { limit } znak)|Twój komentarz jest za długi (maksimum: { limit } znaki)|Twój komentarz jest za długi (maksimum: { limit } znaków)',
    'comment.is_spam' => 'Twój komentarz został uznany za spam.',
  ),
  'validators' => 
  array (
    'This value should be false.' => 'Ta wartość powinna być fałszem.',
    'This value should be true.' => 'Ta wartość powinna być prawdą.',
    'This value should be of type {{ type }}.' => 'Ta wartość powinna być typu {{ type }}.',
    'This value should be blank.' => 'Ta wartość powinna być pusta.',
    'The value you selected is not a valid choice.' => 'Ta wartość powinna być jedną z podanych opcji.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Powinieneś wybrać co najmniej {{ limit }} opcję.|Powinieneś wybrać co najmniej {{ limit }} opcje.|Powinieneś wybrać co najmniej {{ limit }} opcji.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Powinieneś wybrać maksymalnie {{ limit }} opcję.|Powinieneś wybrać maksymalnie {{ limit }} opcje.|Powinieneś wybrać maksymalnie {{ limit }} opcji.',
    'One or more of the given values is invalid.' => 'Jedna lub więcej z podanych wartości jest nieprawidłowa.',
    'This field was not expected.' => 'Tego pola się nie spodziewano.',
    'This field is missing.' => 'Tego pola brakuje.',
    'This value is not a valid date.' => 'Ta wartość nie jest prawidłową datą.',
    'This value is not a valid datetime.' => 'Ta wartość nie jest prawidłową datą i czasem.',
    'This value is not a valid email address.' => 'Ta wartość nie jest prawidłowym adresem email.',
    'The file could not be found.' => 'Plik nie mógł zostać odnaleziony.',
    'The file is not readable.' => 'Nie można odczytać pliku.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Plik jest za duży ({{ size }} {{ suffix }}). Maksymalny dozwolony rozmiar to {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Nieprawidłowy typ mime pliku ({{ type }}). Dozwolone typy mime to {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ta wartość powinna wynosić {{ limit }} lub mniej.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ta wartość jest zbyt długa. Powinna mieć {{ limit }} lub mniej znaków.|Ta wartość jest zbyt długa. Powinna mieć {{ limit }} lub mniej znaków.|Ta wartość jest zbyt długa. Powinna mieć {{ limit }} lub mniej znaków.',
    'This value should be {{ limit }} or more.' => 'Ta wartość powinna wynosić {{ limit }} lub więcej.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ta wartość jest zbyt krótka. Powinna mieć {{ limit }} lub więcej znaków.|Ta wartość jest zbyt krótka. Powinna mieć {{ limit }} lub więcej znaków.|Ta wartość jest zbyt krótka. Powinna mieć {{ limit }} lub więcej znaków.',
    'This value should not be blank.' => 'Ta wartość nie powinna być pusta.',
    'This value should not be null.' => 'Ta wartość nie powinna być nullem.',
    'This value should be null.' => 'Ta wartość powinna być nullem.',
    'This value is not valid.' => 'Ta wartość jest nieprawidłowa.',
    'This value is not a valid time.' => 'Ta wartość nie jest prawidłowym czasem.',
    'This value is not a valid URL.' => 'Ta wartość nie jest prawidłowym adresem URL.',
    'The two values should be equal.' => 'Obie wartości powinny być równe.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Plik jest za duży. Maksymalny dozwolony rozmiar to {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Plik jest za duży.',
    'The file could not be uploaded.' => 'Plik nie mógł być wgrany.',
    'This value should be a valid number.' => 'Ta wartość powinna być prawidłową liczbą.',
    'This file is not a valid image.' => 'Ten plik nie jest obrazem.',
    'This is not a valid IP address.' => 'To nie jest prawidłowy adres IP.',
    'This value is not a valid language.' => 'Ta wartość nie jest prawidłowym językiem.',
    'This value is not a valid locale.' => 'Ta wartość nie jest prawidłową lokalizacją.',
    'This value is not a valid country.' => 'Ta wartość nie jest prawidłową nazwą kraju.',
    'This value is already used.' => 'Ta wartość jest już wykorzystywana.',
    'The size of the image could not be detected.' => 'Nie można wykryć rozmiaru obrazka.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Szerokość obrazka jest zbyt duża ({{ width }}px). Maksymalna dopuszczalna szerokość to {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Szerokość obrazka jest zbyt mała ({{ width }}px). Oczekiwana minimalna szerokość to {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Wysokość obrazka jest zbyt duża ({{ height }}px). Maksymalna dopuszczalna wysokość to {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Wysokość obrazka jest zbyt mała ({{ height }}px). Oczekiwana minimalna wysokość to {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ta wartość powinna być aktualnym hasłem użytkownika.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ta wartość powinna mieć dokładnie {{ limit }} znak.|Ta wartość powinna mieć dokładnie {{ limit }} znaki.|Ta wartość powinna mieć dokładnie {{ limit }} znaków.',
    'The file was only partially uploaded.' => 'Plik został wgrany tylko częściowo.',
    'No file was uploaded.' => 'Żaden plik nie został wgrany.',
    'No temporary folder was configured in php.ini.' => 'Nie skonfigurowano folderu tymczasowego w php.ini, lub skonfigurowany folder nie istnieje.',
    'Cannot write temporary file to disk.' => 'Nie można zapisać pliku tymczasowego na dysku.',
    'A PHP extension caused the upload to fail.' => 'Rozszerzenie PHP spowodowało błąd podczas wgrywania.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ten zbiór powinien zawierać {{ limit }} lub więcej elementów.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ten zbiór powinien zawierać {{ limit }} lub mniej elementów.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ten zbiór powinien zawierać dokładnie {{ limit }} element.|Ten zbiór powinien zawierać dokładnie {{ limit }} elementy.|Ten zbiór powinien zawierać dokładnie {{ limit }} elementów.',
    'Invalid card number.' => 'Nieprawidłowy numer karty.',
    'Unsupported card type or invalid card number.' => 'Nieobsługiwany rodzaj karty lub nieprawidłowy numer karty.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Nieprawidłowy międzynarodowy numer rachunku bankowego (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ta wartość nie jest prawidłowym numerem ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Ta wartość nie jest prawidłowym numerem ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ta wartość nie jest prawidłowym numerem ISBN-10 ani ISBN-13.',
    'This value is not a valid ISSN.' => 'Ta wartość nie jest prawidłowym numerem ISSN.',
    'This value is not a valid currency.' => 'Ta wartość nie jest prawidłową walutą.',
    'This value should be equal to {{ compared_value }}.' => 'Ta wartość powinna być równa {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ta wartość powinna być większa niż {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ta wartość powinna być większa bądź równa {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta wartość powinna być identycznego typu {{ compared_value_type }} oraz wartości {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ta wartość powinna być mniejsza niż {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ta wartość powinna być mniejsza bądź równa {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ta wartość nie powinna być równa {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta wartość nie powinna być identycznego typu {{ compared_value_type }} oraz wartości {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Proporcje obrazu są zbyt duże ({{ ratio }}). Maksymalne proporcje to {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Proporcje obrazu są zbyt małe ({{ ratio }}). Minimalne proporcje to {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Obraz jest kwadratem ({{ width }}x{{ height }}px). Kwadratowe obrazy nie są akceptowane.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Obraz jest panoramiczny ({{ width }}x{{ height }}px). Panoramiczne zdjęcia nie są akceptowane.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Obraz jest portretowy ({{ width }}x{{ height }}px). Portretowe zdjęcia nie są akceptowane.',
    'An empty file is not allowed.' => 'Plik nie może być pusty.',
    'The host could not be resolved.' => 'Nazwa hosta nie została rozpoznana.',
    'This value does not match the expected {{ charset }} charset.' => 'Ta wartość nie pasuje do oczekiwanego zestawu znaków {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ta wartość nie jest poprawnym kodem BIC (Business Identifier Code).',
    'Error' => 'Błąd',
    'This is not a valid UUID.' => 'To nie jest poprawne UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Ta wartość powinna być wielokrotnością {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ten kod BIC (Business Identifier Code) nie jest powiązany z międzynarodowym numerem rachunku bankowego (IBAN) {{ iban }}.',
    'This form should not contain extra fields.' => 'Ten formularz nie powinien zawierać dodatkowych pól.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Wgrany plik był za duży. Proszę spróbować wgrać mniejszy plik.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Token CSRF jest nieprawidłowy. Proszę spróbować wysłać formularz ponownie.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Wystąpił błąd uwierzytelniania.',
    'Authentication credentials could not be found.' => 'Dane uwierzytelniania nie zostały znalezione.',
    'Authentication request could not be processed due to a system problem.' => 'Żądanie uwierzytelniania nie mogło zostać pomyślnie zakończone z powodu problemu z systemem.',
    'Invalid credentials.' => 'Nieprawidłowe dane.',
    'Cookie has already been used by someone else.' => 'To ciasteczko jest używane przez kogoś innego.',
    'Not privileged to request the resource.' => 'Brak uprawnień dla żądania wskazanego zasobu.',
    'Invalid CSRF token.' => 'Nieprawidłowy token CSRF.',
    'No authentication provider found to support the authentication token.' => 'Nie znaleziono mechanizmu uwierzytelniania zdolnego do obsługi przesłanego tokenu.',
    'No session available, it either timed out or cookies are not enabled.' => 'Brak danych sesji, sesja wygasła lub ciasteczka nie są włączone.',
    'No token could be found.' => 'Nie znaleziono tokenu.',
    'Username could not be found.' => 'Użytkownik o podanej nazwie nie istnieje.',
    'Account has expired.' => 'Konto wygasło.',
    'Credentials have expired.' => 'Dane uwierzytelniania wygasły.',
    'Account is disabled.' => 'Konto jest wyłączone.',
    'Account is locked.' => 'Konto jest zablokowane.',
  ),
  'messages+intl-icu' => 
  array (
    'note' => 'UWAGA',
    'tip' => 'PORADA',
    'not_available' => 'Niedostępne',
    'mit_license' => 'Licencja MIT',
    'title.homepage' => 'Witamy w aplikacji <strong>Symfony Demo</strong>',
    'title.source_code' => 'Kod źródłowy użyty do wygenerowania tej podstrony',
    'title.controller_code' => 'Kod kontrolera',
    'title.twig_template_code' => 'Kod szablonu Twig',
    'title.login' => 'Bezpieczne logowanie',
    'title.post_list' => 'Lista artykułów',
    'title.edit_post' => 'Edytuj artykuł #{id, number}',
    'title.add_comment' => 'Dodaj komentarz',
    'title.comment_error' => 'Podczas publikacji Twojego komentarza wystąpił błąd',
    'action.show' => 'Pokaż',
    'action.show_code' => 'Pokaż kod',
    'action.edit' => 'Edytuj',
    'action.edit_post' => 'Edytuj artykuł',
    'action.save' => 'Zapisz',
    'action.delete_post' => 'Usuń artykuł',
    'delete_post_modal.title' => 'Czy na pewno chcesz usunąć ten artykuł?',
    'delete_post_modal.body' => 'Ta akcja nie może zostać cofnięta.',
    'label.delete_post' => 'Usuń artykuł',
    'label.cancel' => 'Anuluj',
    'action.create_post' => 'Dodaj nowy artykuł',
    'label.create_post' => 'Dodaj artykuł',
    'label.save_and_create_new' => 'Zapisz i dodaj kolejny',
    'action.back_to_list' => 'Powrót do listy artykułów',
    'action.publish_comment' => 'Publikuj komentarz',
    'action.sign_in' => 'Zaloguj się',
    'action.browse_app' => 'Przeglądaj aplikację',
    'action.browse_admin' => 'Przeglądaj panel administracyjny',
    'label.title' => 'Tytuł',
    'label.author' => 'Autor',
    'label.author_email' => 'Adres e-mail autora',
    'label.username' => 'Użytkownik',
    'label.password' => 'Hasło',
    'label.role' => 'Rola',
    'label.content' => 'Treść',
    'label.summary' => 'Podsumowanie',
    'label.published_at' => 'Opublikowano',
    'label.actions' => 'Akcje',
    'title.post_new' => 'Tworzenie nowego artykułu',
    'action.edit_contents' => 'Edycja treści',
    'menu.toggle_nav' => 'Przełącz nawigację',
    'menu.post_list' => 'Lista artykułów',
    'menu.back_to_blog' => 'Powrót do bloga',
    'menu.homepage' => 'Strona główna',
    'menu.admin' => 'Panel administracyjny',
    'menu.logout' => 'Wyloguj się',
    'post.to_publish_a_comment' => 'aby dodać komentarz',
    'post.num_comments' => '{count, plural, one {# komentarz} many {# komentarze} other {# komentarzy}}',
    'post.commented_on' => 'skomentował',
    'post.no_comments' => 'Bądź pierwszym, który skomentuje.',
    'post.no_posts_found' => 'Brak artykułów',
    'post.created_successfully' => 'Artykuł został utworzony!',
    'post.updated_successfully' => 'Artykuł został zaktualizowany!',
    'post.deleted_successfully' => 'Artykuł został usunięty!',
    'help.app_description' => 'To jest <strong> przykładowa aplikacja </strong> zbudowana przy pomocy frameworka Symfony, dla zademonstrowania polecanego sposobu tworzenia aplikacji przy jego użyciu.',
    'help.show_code' => 'Kliknij poniższy przycisk, aby zobaczyć kod <strong>kontrolera</strong> oraz <strong>szablonu</strong> użytych podczas generowania tej podstrony.',
    'help.browse_app' => 'Przeglądaj <strong>publiczną część</strong> aplikacji demonstracyjnej.',
    'help.browse_admin' => 'Przeglądaj <strong>panel administracyjny</strong> aplikacji demonstracyjnej.',
    'help.login_users' => 'Użyj dowolnego z poniższych użytkowników',
    'help.role_user' => 'zwykły użytkownik',
    'help.role_admin' => 'administrator',
    'help.reload_fixtures' => 'Jeśli powyższe dane logowania nie działają, załaduj ponownie przykładowe dane dla tej aplikacji. Uruchom następującą komendę:',
    'help.add_user' => 'Jeśli chcesz dodać nowego użytkownika, uruchom następującą komendę:',
    'help.more_information' => 'Sprawdź <a href="https://symfony.com/doc">dokumentację Symfony</a>, aby uzyskać więcej informacji.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators+intl-icu' => 
  array (
    'post.blank_summary' => 'Give your post a summary!',
    'post.blank_content' => 'Your post should have some content!',
    'post.too_short_content' => 'Post content is too short ({ limit } characters minimum)',
    'post.too_many_tags' => 'Too many tags (add { limit } tags or less)',
    'comment.blank' => 'Please don\'t leave your comment blank!',
    'comment.too_short' => 'Comment is too short ({ limit } characters minimum)',
    'comment.too_long' => 'Comment is too long ({ limit } characters maximum)',
    'comment.is_spam' => 'The content of this comment is considered spam.',
  ),
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'messages+intl-icu' => 
  array (
    'note' => 'NOTE',
    'tip' => 'TIP',
    'not_available' => 'Not available',
    'mit_license' => 'MIT License',
    'http_error.name' => 'Error {status_code, number}',
    'http_error.description' => 'There was an unknown error (HTTP {status_code, number}) that prevented to complete your request.',
    'http_error.suggestion' => 'Try loading this page again in some minutes or <a href="{url}">go back to the homepage</a>.',
    'http_error_403.description' => 'You don\'t have permission to access to this resource.',
    'http_error_403.suggestion' => 'Ask your manager or system administrator to grant you access to this resource.',
    'http_error_404.description' => 'We couldn\'t find the page you requested.',
    'http_error_404.suggestion' => 'Check out any misspelling in the URL or <a href="{url}">go back to the homepage</a>.',
    'http_error_500.description' => 'There was an internal server error.',
    'http_error_500.suggestion' => 'Try loading this page again in some minutes or <a href="{url}">go back to the homepage</a>.',
    'title.homepage' => 'Welcome to the <strong>Symfony Demo</strong> application',
    'title.source_code' => 'Source code used to render this page',
    'title.controller_code' => 'Controller code',
    'title.twig_template_code' => 'Twig template code',
    'title.login' => 'Secure Sign in',
    'title.post_list' => 'Post List',
    'title.edit_post' => 'Edit post #{id, number}',
    'title.add_comment' => 'Add a comment',
    'title.comment_error' => 'There was an error publishing your comment',
    'title.edit_user' => 'Edit user',
    'title.change_password' => 'Change password',
    'action.show' => 'Show',
    'action.show_post' => 'Show post',
    'action.show_code' => 'Show code',
    'action.edit' => 'Edit',
    'action.edit_post' => 'Edit post',
    'action.save' => 'Save changes',
    'action.delete_post' => 'Delete post',
    'delete_post_modal.title' => 'Are you sure you want to delete this post?',
    'delete_post_modal.body' => 'This action cannot be undone.',
    'label.delete_post' => 'Delete post',
    'label.cancel' => 'Cancel',
    'action.create_post' => 'Create a new post',
    'label.create_post' => 'Create post',
    'label.save_and_create_new' => 'Save and create new',
    'action.back_to_list' => 'Back to the post list',
    'action.publish_comment' => 'Publish comment',
    'action.sign_in' => 'Sign in',
    'action.browse_app' => 'Browse application',
    'action.browse_admin' => 'Browse backend',
    'action.edit_user' => 'Edit user',
    'action.change_password' => 'Change password',
    'label.title' => 'Title',
    'label.author' => 'Author',
    'label.author_email' => 'Author email',
    'label.username' => 'Username',
    'label.fullname' => 'Fullname',
    'label.email' => 'Email',
    'label.password' => 'Password',
    'label.current_password' => 'Current password',
    'label.new_password' => 'New password',
    'label.new_password_confirm' => 'Confirm password',
    'label.role' => 'Role',
    'label.content' => 'Content',
    'label.summary' => 'Summary',
    'label.published_at' => 'Published at',
    'label.tags' => 'Tags',
    'label.actions' => 'Actions',
    'title.post_new' => 'Post creation',
    'action.edit_contents' => 'Edit contents',
    'menu.toggle_nav' => 'Toggle navigation',
    'menu.choose_language' => 'Choose language',
    'menu.post_list' => 'Post list',
    'menu.back_to_blog' => 'Back to blog',
    'menu.homepage' => 'Homepage',
    'menu.admin' => 'Backend',
    'menu.user' => 'Account',
    'menu.logout' => 'Logout',
    'menu.rss' => 'Blog Posts RSS',
    'menu.search' => 'Search',
    'post.to_publish_a_comment' => 'to publish a comment',
    'post.num_comments' => '{count, plural, one {# comment} other {# comments}}',
    'post.commented_on' => 'commented on',
    'post.no_comments' => 'Be the first to comment on this post.',
    'post.no_posts_found' => 'No posts found.',
    'post.created_successfully' => 'Post created successfully!',
    'post.updated_successfully' => 'Post updated successfully!',
    'post.deleted_successfully' => 'Post deleted successfully!',
    'post.search_for' => 'Search for...',
    'post.search_no_results' => 'No results found',
    'user.updated_successfully' => 'User updated successfully!',
    'notification.comment_created' => 'Your post received a comment!',
    'notification.comment_created.description' => 'Your post "{title}" has received a new comment. You can read the comment by following <a href="{link}">this link</a>',
    'help.app_description' => 'This is a <strong>demo application</strong> built in the Symfony Framework to illustrate the recommended way of developing Symfony applications.',
    'help.show_code' => 'Click on this button to show the source code of the <strong>Controller</strong> and <strong>template</strong> used to render this page.',
    'help.browse_app' => 'Browse the <strong>public section</strong> of the demo application.',
    'help.browse_admin' => 'Browse the <strong>admin backend</strong> of the demo application.',
    'help.login_users' => 'Try either of the following users',
    'help.role_user' => 'regular user',
    'help.role_admin' => 'administrator',
    'help.reload_fixtures' => 'If these users don\'t work, reload application fixtures by running this command from the terminal:',
    'help.add_user' => 'If you want to create new users, run this other command:',
    'help.more_information' => 'For more information, check out the <a href="https://symfony.com/doc">Symfony doc</a>.',
    'help.post_summary' => 'Summaries can\'t contain Markdown or HTML contents; only plain text.',
    'help.post_publication' => 'Set the date in the future to schedule the blog post publication.',
    'help.post_content' => 'Use Markdown to format the blog post contents. HTML is allowed too.',
    'help.comment_content' => 'Comments not complying with our Code of Conduct will be moderated.',
    'info.change_password' => 'After changing your password, you will be logged out of the application.',
    'rss.title' => 'Symfony Demo blog',
    'rss.description' => 'Most recent posts published on the Symfony Demo blog',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
