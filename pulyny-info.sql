-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Час створення: Трв 09 2023 р., 18:36
-- Версія сервера: 5.5.48-log
-- Версія PHP: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `pulyny-info`
--

-- --------------------------------------------------------

--
-- Структура таблиці `wm_advertisement`
--

CREATE TABLE `wm_advertisement` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Оголошення';

--
-- Дамп даних таблиці `wm_advertisement`
--

INSERT INTO `wm_advertisement` (`id`, `title`, `description`, `text`, `image`, `slug`) VALUES
(4, 'С/г техніка з нижчою ціною,бездоганною якістю, компенсацією від 25-40%', 'Регіональний представник в Черкаський області пропонує нову с/г техніку ТОВ', '<p>Регіональний представник в Черкаський області пропонує нову с/г техніку ТОВ &quot; Оріхівсільмаш&quot;.&nbsp;</p><p>Працює на ринку більше 10 років. Більше 7000 одиниць техніки працюють по всій території України.&nbsp;</p><p>Основні напрямки виробляємоі техніки:&nbsp;</p><p>1. Культиватори : КПП-4,1; 7; 8,3; 9,7&nbsp;</p><p>2. Розкидачі міндобрив : РМД-500; РМД-1000; РМД-3000&nbsp;</p><p>3. Зерномети : ЗЗП-60, 80, 100, 160&nbsp;</p><p>4. Причепи тракторні : 2ПТС-4 ; 2ПТС-6 ;НТС-5 ; НТС-12&nbsp;</p><p>5. Борони шлейфові : БШ-7,5; БШ-10,5 ;БШ-14,5</p><p>6. Очістна машина :ОВУ-25 аналог ОВС-25&nbsp;</p><p>7.Борона ротаційна: БР-6;БР-6Г(Гідрофікована);БР-9Г&nbsp;</p><p>8.Каток-подрібнювач : КП-6 Вся техніка проходить техвипробування і має державні сертифікати відповідності ДСТУ та стандарт ISO 9001:2015&nbsp;</p><p>Забеспечує 100% запчастин до своєі техніки Вся техніка підлягає компенсаціі з держбюджету від 25 до 40%. Доставка або самовивозом, або будь яким перевізником, або нашим транспортом. Оплачується окремо.</p>', '\\uploads\\advertisement\\2_s-g-tehnika-z-nizhchoyu-cinoyubezdogannoyu-yakistyu-photo-13c1.jpg', 'sh-tekhnika-z-nyzhchoyu-tsinoyu,bezdohannoyu-yakistyu,-kompensatsiyeyu-vid-25-40'),
(6, 'MACBOOK PRO CORE I7 2.80 GHZ 15\'\' 16GB RAM 256GB SSD $700', 'Новий Apple MacBook Pro core i7 2.80 GHZ 15\'\' 16GB RAM 256GB SSD з 1 рік гарантії,', '<p>новий Apple MacBook Pro core i7 2.80 GHZ 15&#39;&#39; 16GB RAM 256GB SSD з 1 рік гарантії,</p><hr><p><strong>Контактна інформація&nbsp;</strong></p><p><strong>Email: ibaymarts@gmail.com&nbsp;</strong></p><p><strong>Skype: ibaymart</strong></p>', '\\uploads\\advertisement\\1_649821384_1_261x203_macbook-pro-retina-2015-15-16-gb-512gb-ssd-diskretne-vdeo-yak-noviy-rovno.jpg', 'macbook-pro-core-i7-2.80-ghz-15-16gb-ram-256gb-ssd-$700'),
(7, 'Квартира в смт Пулини', 'Квартира повністю готова для житла, сучасний інтер\'єр, евроремонт в смт. Пулини', '<p>Квартира повністю готова для житла, сучасний інтер&#39;єр, евроремонт в смт. Пулини</p>', '\\uploads\\advertisement\\1_526817488_1_644x461_kvartira-v-smt-pulini-volodarsk-volinskiy.jpg', 'kvartyra-v-smt-pulyny'),
(8, 'Привет', 'hgkhg', '<p><span style="font-size: 11px;">hkghkgh</span></p>', '\\uploads\\advertisement\\no-image.png', 'pryvet');

-- --------------------------------------------------------

--
-- Структура таблиці `wm_articles`
--

CREATE TABLE `wm_articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Статьи';

--
-- Дамп даних таблиці `wm_articles`
--

INSERT INTO `wm_articles` (`id`, `title`, `name`, `description`, `text`, `image`, `meta_description`, `meta_keywords`, `date`) VALUES
(4, 'Випускники із Пулинського району поспілкувалися із Михайлом Поплавським', 'vypusknyky-iz-pulynskoho-rayonu-pospilkuvalysya-iz-mykhaylom-poplavskym', 'Суботнього ранку 5 травня Університет культури відкрив двері для випускників Пулинського району, аби молодь поринула у студентську атмосферу, поспілкувалась з викладачами і студентами та відвідала інноваційні лабораторії для навчання на факультетах університету.', '<p>Суботнього ранку 5 травня Університет культури відкрив двері для випускників Пулинського району, аби молодь поринула у студентську атмосферу, поспілкувалась з викладачами і студентами та відвідала інноваційні лабораторії для навчання на факультетах університету.</p><p><br></p><p>В ході екскурсії вишем майбутні абітурієнти довідались про унікальний шанс отримати подвійний диплом українського та європейського зразка після закінчення вишу. Університет культури здійснює активну співпрацю із провідними вишами Польщі, Італії, Англії, Франції і Німеччини. Студентів навчають за інноваційними освітніми програмами. Практику молодь проходить у провідних корпораціях столиці та країн Європи.</p><p>Кульмінацією Дня відкритих дверей стало спілкування молоді із Михайлом Поплавським та з Іриною Кудашовою, головною героїнею серіалу &laquo;Школа&raquo;.</p>', '\\uploads\\articles\\060518_4.jpg', 'Суботнього ранку 5 травня Університет культури відкрив двері для випускників Пулинського району, аби молодь поринула у студентську атмосферу, поспілкувалась з викладачами і студентами та відвідала інноваційні лабораторії для навчання на факультетах університету.', 'Поплавський', '0000-00-00'),
(7, 'Гарні результати на обласних змаганнях з шахів та шашок', 'harni-rezultaty-na-oblasnykh-zmahannyakh-z-shakhiv-ta-shashok', 'На базі Селянщинського спортивного ліцею 17 квітня пройшли змагання з шахів та шашок під девізом', '<p><strong>На базі Селянщинського спортивного ліцею 17 квітня пройшли змагання з шахів та шашок під девізом:&quot;Хто ти, майбутній олімпієць?&quot;<br>Всі учасники змагань показали свою майстерність гри, хотіли тільки перемоги, але є переможці та переможені.</strong></p><p><br></p><p><strong>Переможцями серед юнаків з шахів стали:</strong> І місце - Качура Сергій (Селянщинський спортивний ліцей), ІІ місце - Наумчук Даня (Селянщинський спортивний ліцей), <strong>ІІІ місце - Боярчук Олександр (Пулинська ОТГ, Чернявська ЗОШ І-ІІ ст.)</strong>, серед дівчат І місце у Наумчук Анастасії (Селянщинський спортивний ліцей), <strong>ІІ - Бондарчук Діана (Пулинська ОТГ, Вацлавпільська гімназія),</strong> ІІІ - Миколайчук Анастасія (Селянщинський спортивний ліцей).</p><p style="text-align: center;">Переможцями <strong>у змаганнях з шашок серед юнаків стали: І місце - Андрієнко Максим (Пулинська ОТГ, Вацлавпільська гімназія),</strong> ІІ місце- Давиденко Павло (Селянщинський спортивний ліцей), ІІІ місце - Качура Олег (Селянщинський спортивний ліцей), <strong>серед дівчат І місце - Панченко Людмила (Пулинська ОТГ, Вацлавпільська гімназія),</strong> ІІ місце - Давидок Єлизавета (Селянщинський спортивний ліцей), ІІІ місце - Качура Альона (Селянщинський спортивний ліцей).</p><p style="text-align: center;">В загальнокомандному заліку такі результати:</p><p style="text-align: center;">Шахи: І місце - Селянщинський спортивний ліцей, <strong>ІІ місце - Пулинська ОТГ</strong>, ІІІ місце - Черняхівський р-н.</p><p style="text-align: center;">Шашки: <strong>І місце - Пулинська ОТГ</strong>, ІІ місце - Селянщинський спортивний ліцей, ІІІ місце - Черняхівський р-н.</p>', '\\uploads\\articles\\180418_1.jpg', 'На базі Селянщинського спортивного ліцею 17 квітня пройшли змагання з шахів та шашок під девізом', 'Шахи, шашки', '0000-00-00'),
(10, 'ВИЗНАЧЕНО ВОЛОДАРЯ КУБКА ВЕСНИ 2018', 'vyznacheno-volodarya-kubka-vesny-2018', 'Завершився кубок весни Пулинського району з футболу. 9 травня на стадіоні в Пулинах у фінальному матчі зустрічались команди зі Старого Майдану "Арсенал" та Стрибіжа "Автомобіліст".  Перемогу в боротьбі за кубок Весни 2018 року здобула команда "Арсенал", яка з розгромним рахунком 7:1 перемогла команду "Автомобіліст".', '<p>Завершився кубок весни Пулинського району з футболу. 9 травня на стадіоні в Пулинах у фінальному матчі зустрічались команди зі Старого Майдану &quot;Арсенал&quot; та Стрибіжа &quot;Автомобіліст&quot;.</p><p>Перемогу в боротьбі за кубок Весни 2018 року здобула команда &quot;Арсенал&quot;, яка з розгромним рахунком 7:1 перемогла команду &quot;Автомобіліст&quot;.</p><p><img src="https://drive.google.com/uc?export=viev&id=1Iz9jNyPw7NUugVlTy89bc_fDKso0kRth" alt="" width="600" height="450" class="fr-fic fr-dii"></p><p>Нагадаємо, що</p><p><a href="http://xn--h1afiajie1b6j.zt.ua/index.php/11-novyny/sport/1161-v-pulynskomu-raioni-vyznachyvsia-volodar-kubku-vesny" rel="alternate">Переможець Кубку Весни 2017 - ФК &quot;Арсенал&quot;</a>&nbsp;<br><a href="http://xn--h1afiajie1b6j.zt.ua/index.php/11-novyny/sport/676-final-kubka-vesny" rel="alternate">Переможець Кубку Весни 2016 - ФК &quot;Пулини&quot;</a>&nbsp;<br><a href="http://xn--h1afiajie1b6j.zt.ua/index.php/11-novyny/sport/370-rozihrano-kubok-vesny" rel="alternate">Переможець Кубку Весни 2015 - ФК &quot;Автомобіліст&quot;</a><br><a href="http://xn--h1afiajie1b6j.zt.ua/index.php/11-novyny/sport/66-vyznachyvsia-peremozhets-vesnianoho-kubku" rel="alternate">Переможець Кубку Весни 2014 - ФК &quot;Автомобіліст&quot;</a></p>', '\\uploads\\articles\\vyznacheno-volodarya-kubka-vesny-2018_100518_1.jpg', 'ВИЗНАЧЕНО ВОЛОДАРЯ КУБКА ВЕСНИ 2018', 'ВИЗНАЧЕНО ВОЛОДАРЯ КУБКА ВЕСНИ 2018', '0000-00-00'),
(11, 'Винуватця ДТП знайшли в Пулинському районі', 'vynuvattsya-dtp-znayshly-v-pulynskomu-rayoni', 'За інформацією національної поліції дорожньо-транспортна пригода мала місце тиждень тому поблизу с. Березівки Житомирського району. Травмованого велосипедиста забрала «швидка», натомість винуватець дорожньо-транспортної пригоди з місця події втік. Встановити автомобіль та розшукати керманича поліцейським допомогли записи камер відеоспостереження та відео реєстраторів випадкових свідків пригоди. Досудове розслідування триває.', '<p>За інформацією національної поліції дорожньо-транспортна пригода мала місце тиждень тому поблизу с. Березівки Житомирського району. Травмованого велосипедиста забрала &laquo;швидка&raquo;, натомість винуватець дорожньо-транспортної пригоди з місця події втік. Встановити автомобіль та розшукати керманича поліцейським допомогли записи камер відеоспостереження та відео реєстраторів випадкових свідків пригоди. Досудове розслідування триває.</p><p>Увечері 30 квітня 2018 року до Житомирського відділення поліції надійшло повідомлення про дорожньо-транспортну пригоду поблизу села Березівка, в якій постраждав велосипедист.</p><p>На 155 кілометрі автодороги Київ &ndash; Чоп, де сталася ДТП, прибула слідчо-оперативна група. На місці пригоди працювали також патрульні поліцейські та медики, які й госпіталізували потерпілого внаслідок удару невідомої автівки велосипедиста, 57-річного житомирянина.</p><p>За першочерговими відомостями, отриманими зі слів очевидців ДТП, велосипедист рухався узбіччям автодороги у напрямку міста Новограда-Волинського, коли його збив автомобіль &laquo;Форд&raquo; сірого кольору, що їхав у попутному напрямку. Водій-винуватець місце пригоди залишив.</p><p>Під час огляду навколишньої території та безпосередньо місця вчинення дорожньо-транспортної пригоди було вилучено уламки та фрагменти автівки, а також низку інших речових доказів. На розшук підозрілого автомобіля з характерними для ДТП механічними пошкодженнями було зорієнтовано зовнішні наряди поліції ГУНП та Управління патрульної поліції регіону.</p><p>До Єдиного реєстру досудових розслідувань були внесені відомості за ч.1 ст.286 (Порушення правил безпеки дорожнього руху або експлуатації транспорту особами, які керують транспортними засобами) Кримінального кодексу України.</p><p>&ndash; Серед іншого, нами була проведена кропітка робота з вивчення та узагальнення записів камер відеоспостереження, встановлених на окремих ділянках автодороги Київ &ndash; Чоп. Окрім того, відгукнулися випадкові свідки ДТП, на чиїх відеореєстраторах був зафіксований момент вчинення невідомим автомобілем порушення, внаслідок якого постраждала людина. Усі ці відомості в комплексі дозволили нам встановити особу керманича-втікача, - розповів начальник Житомирського відділення поліції Сергій Крошко.</p><p>Розшукуваним виявився 58-річний власник автомобіля &laquo;Форд Сієра&raquo;, житель Пулинського району. Запрошення прибути до відділення поліції разом з автівкою чоловік не проігнорував і визнав свою причетність до нещодавнього ДТП. За словами винуватця, він погано почувався того вечора, а тому, збивши людину, добряче злякався й поїхав геть.</p>', '\\uploads\\articles\\vodiya-yakyy-vtik-z-mistsya-dtp-znayshly-v-pulynskomu-rayoni_110518_1.jpg', 'Авто', 'Поліція', '0000-00-00'),
(12, 'Мати-зозуля з Пулинського району підкинула четверо дітей різним батькам', 'maty-zozulya-z-pulynskoho-rayonu-pidkynula-chetvero-ditey-riznym-batkam', 'Два тижні тому 6-місячну Софійку з Вінниччини кинула рідна мати. Тепер батько малятка, Олександр, змушений доглядати за дитиною самотужки.', '<p>Два тижні тому 6-місячну Софійку з Вінниччини кинула рідна мати. Тепер батько малятка, Олександр, змушений доглядати за дитиною самотужки.Чоловік досі не може повірити, що кохана після двох років щасливого сімейного життя потайки втекла з дому, забравши з собою всі гроші. Але маленька Софія &mdash; не єдина залишена Валентиною донька. Виявляється, раніше жінка покинула першу дитину і влаштувала особисте життя в сусідній області.Жінкою, яка лишала своїх дітей йдучи жити з новими чоловіками з сусідніх сіл Пулинського району, виявилась 26-річна жителька села Соколів. Чому вона вирішила жити на дві сім&rsquo;ї та як їй вдалося приховати це від обох чоловіків, Валентина розповіла в студії.Познайомилися вони з Сашком на сайті знайомств. Бентежило його те, що анкету із сайту знайомств Валя не видалила і не погоджувалася укладати шлюб із ним навіть після народження дитини. Про те, що обраниця була заміжня, а Софійка &mdash; не єдина її донька, Олександр дізнався тільки після того, як подав в розшук на жінку.<br><br>Виявилося, що зараз Валентина знову проживає зі своїм попереднім чоловіком, Сергієм. Сергій впевнений, що Олександр викрав Валю і насильно утримував поруч із собою.<br><br>Як не дивно, познайомилася з ним Валентина на тому ж сайті знайомств, що і в майбутньому з Олександром. І так само майже відразу переїхала жити до нього.<br><span class="fr-video fr-fvc fr-dvb fr-draggable" contenteditable="false" draggable="true"><iframe width="640" height="360" src="//www.youtube.com/embed/aTh6_Agm57E?wmode=opaque" frameborder="0" allowfullscreen=""></iframe></span><br>Навіть більш, з&rsquo;ясувалося, що і Сергій &mdash; не перший чоловік, від якого Валя народила дитину. Крім 3-річної Любочки і 6-місячної Софійки, у неї є ще дочка і син від ще двох різних чоловіків.</p>', '\\uploads\\articles\\maty-zozulya-z-pulynskoho-rayonu-pidkynula-chetvero-ditey-riznym-batkam_2018-05-06_215209.webp', 'МАТИ-ЗОЗУЛЯ', 'МАТИ-ЗОЗУЛЯ', '0000-00-00'),
(13, 'В Мартинівці знайдено мертвим чоловіка власниці кафе', 'v-martynivtsi-znaydeno-mertvym-cholovika-vlasnytsi-kafe', '20 травня до відділення поліції надійшло повідомлення про виявлення у приміщенні кафе одного з сіл району тіла власника із травмами голови. У ході першочергових заходів поліцейські встановили чоловіка, причетного до нанесення загиблому тяжких тілесних ушкоджень. Нині підозрюваного затримано.    Тіло 52-річного чоловіка, жителя обласного центру, у приміщенні кафе знайшла дружина після того, як упродовж кількох годин не змогла додзвонитись до нього на мобільний.    Під час з’ясування усіх обставин поліцейські встановили, що підприємець звечора 19 травня затримався у кафе, наводячи лад у закладі, і вирішив там заночувати, аби пізньої пори не повертатись у місто.', '<p>20 травня до відділення поліції надійшло повідомлення про виявлення у приміщенні кафе одного з сіл району тіла власника із травмами голови. У ході першочергових заходів поліцейські встановили чоловіка, причетного до нанесення загиблому тяжких тілесних ушкоджень. Нині підозрюваного затримано.</p><p><br></p><p>Тіло 52-річного чоловіка, жителя обласного центру, у приміщенні кафе знайшла дружина після того, як упродовж кількох годин не змогла додзвонитись до нього на мобільний.</p><p><br></p><p>Під час з&rsquo;ясування усіх обставин поліцейські встановили, що підприємець звечора 19 травня затримався у кафе, наводячи лад у закладі, і вирішив там заночувати, аби пізньої пори не повертатись у місто.</p><p><br></p><p>- Це рішення стало для чоловіка фатальним. Цієї ж ночі до приміщення проник злодій, який несподівано для себе наткнувся на господаря. Між ними сталася сутичка, у результаті якої підприємець отримав смертельні травми, - розповів т.в.о. начальника ГУНП в Житомирській області Сергій Крупєй.</p><p><br></p><p>Особу нічного крадія оперативники кримінальної поліції встановили, зібравши по деталям інформацію з місця події. Підозрюваного затримали того ж дня за місцем його проживання у с. Неборівці Пулинського району.</p><p>- 33-річний чоловік раніше уже притягувався до кримінальної відповідальності, у тому числі і за умисне вбивство. Після вчинення злочину він не погребував забрати з кафе алкоголь, продукти та електроінструмент. Під час його затримання частину з викраденого було знайдено, - продовжує Сергій Крупєй.</p><p><br></p><p><br></p><p>Також за місцем проживання підозрюваного було вилучено низку інших речових доказів причетності до вбивства.</p><p>Досудове розслідування проводиться за ознаками правопорушення, передбаченого п. 6 ч. 2 ст. 115 (Умисне вбивство) Кримінального кодексу України. За такі дії передбачено покарання у вигляді позбавлення волі на термін від 10 до 15 років або довічне ув&rsquo;язнення.</p><p><span class="fr-video fr-fvc fr-dvb fr-draggable" contenteditable="false" draggable="true"><iframe width="640" height="360" src="//www.youtube.com/embed/OiDuoC9uWxk?wmode=opaque" frameborder="0" allowfullscreen=""></iframe></span><br></p>', '\\uploads\\articles\\v-martynivtsi-znaydeno-mertvym-cholovika-vlasnytsi-kafe_230518_3.jpg', 'Кримінальні новини', 'Вбивство', '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблиці `wm_chat`
--

CREATE TABLE `wm_chat` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message` text,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Публічний чат';

--
-- Дамп даних таблиці `wm_chat`
--

INSERT INTO `wm_chat` (`id`, `user_id`, `message`, `date`) VALUES
(1, 5, '<p>Привіт</p>', '0000-00-00 00:00:00'),
(2, 2, '<p>Привіт</p>', '0000-00-00 00:00:00'),
(3, 5, '<p>Як справи?</p>', '0000-00-00 00:00:00'),
(4, 2, '<p>Нормально. Пишу дипломний прект)</p>', '0000-00-00 00:00:00'),
(5, 2, '<p>Як твої справи?</p>', '0000-00-00 00:00:00'),
(6, 5, 'Нормально', '0000-00-00 00:00:00'),
(7, 5, 'Завтра попередній захист?', '0000-00-00 00:00:00'),
(8, 6, '<p>давай учись-а не музичку слухаєш...</p><p><br></p>', '0000-00-00 00:00:00'),
(9, 2, '<p>Перевірка роботи)</p>', '0000-00-00 00:00:00'),
(10, 7, '<p>gfjgfjfghj</p>', '0000-00-00 00:00:00'),
(11, 2, '<p>Привет)</p><p><br></p><p><br></p>', '0000-00-00 00:00:00'),
(12, 2, '<p>поняв</p><p><br></p><p><br></p><p><br></p>', '0000-00-00 00:00:00'),
(13, 8, '<p>привет</p>', '0000-00-00 00:00:00'),
(14, 5, '<p>Привіт</p>', '0000-00-00 00:00:00'),
(15, 5, '<p>Це я)</p>', '0000-00-00 00:00:00'),
(16, 5, '<p>Давай клавіатуру</p>', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблиці `wm_comments`
--

CREATE TABLE `wm_comments` (
  `id` int(11) NOT NULL,
  `user` int(12) NOT NULL,
  `date` datetime NOT NULL,
  `text` text NOT NULL,
  `news` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Коментарі до новин';

--
-- Дамп даних таблиці `wm_comments`
--

INSERT INTO `wm_comments` (`id`, `user`, `date`, `text`, `news`) VALUES
(1, 2, '2018-05-22 00:00:00', 'Цікаво)', 4),
(2, 3, '2018-05-26 05:26:06', 'Класно', 4),
(3, 5, '2018-05-26 14:16:27', 'Новий коментар', 4),
(4, 2, '0000-00-00 00:00:00', '<p>Жах</p>', 12),
(5, 2, '0000-00-00 00:00:00', '<p>Як так можна...</p>', 12),
(6, 2, '2018-05-26 16:00:16', '<p>Ні сорому ні совісті</p>', 12),
(7, 2, '2018-05-26 16:14:22', '<p>Тестовий коментра</p>', 12),
(8, 2, '2018-05-26 16:15:48', '<p>Ще один коментар))</p>', 12),
(9, 2, '2018-05-26 16:16:34', '<p>А Машина ще не нова)</p>', 11),
(10, 2, '2018-05-26 16:22:24', '<p>Як завжди зроблять не винним)</p>', 11),
(11, 2, '2018-05-26 16:22:55', '<p>Так тримати)</p>', 10),
(12, 6, '2018-05-26 16:31:59', '<p>так.легеньке б-у</p><p><br></p>', 11),
(13, 2, '2018-05-26 19:06:13', '<p>Оце так новина...</p>', 13),
(14, 2, '2018-05-26 21:24:00', '<p>Не очікувано... А коментар Пулинських поліцейських є???</p>', 13),
(15, 2, '2022-02-19 21:07:03', '<p>Ghbdfs</p>', 10),
(16, 2, '2022-02-19 21:07:08', '<p><strong>sadsad</strong></p>', 10);

-- --------------------------------------------------------

--
-- Структура таблиці `wm_pages`
--

CREATE TABLE `wm_pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Опис сторінок';

--
-- Дамп даних таблиці `wm_pages`
--

INSERT INTO `wm_pages` (`id`, `title`, `name`, `meta_description`, `meta_keywords`, `text`) VALUES
(1, 'Публічний чат', 'publichnyy-chat', 'Публічний чат', 'Чат', '<p>Текст</p>'),
(2, 'Оголошення', 'oholoshenya', 'Оголошення', 'Оголошення', 'Оголошення'),
(3, 'Зворотній зв\'язок', 'zvorotniy-zvyazok', 'Зворотній зв\'язок', 'Зворотній зв\'язок, feedback', '<p>Зворотній зв&#39;язок</p>'),
(7, 'Про Пулини', 'pro-pulyny', 'Опис про Пулини', 'Пулини, опис', '<p><strong><img src="https://i.froala.com/download/5e673b7bd1396f148f32097ab63ec2a1c378fc55.png?1527357006" style="width: 300px;" class="fr-fic fr-fil fr-dii">Пулин́и</strong> (до XVI ст. &mdash; Чортоліси, (1578&mdash;1935)- Пулини, у (1935&mdash;2016) роках &mdash; Червоноармійськ) &mdash; селище міського типу що розташоване на берегах Теньки в Україні на Поліссі, Адміністративний центр Пулинського району Житомирської області та Пулинської ОТГ.&nbsp;</p><p>Населення &mdash; 5433.&nbsp;</p><p>На честь селища названо астероїд № 241192.&nbsp;</p><p>У часи Німецько-Радянської війни (1941&mdash;1945) &mdash; важливе поле вирішальних битв, відоме як Пулинський німецький район.&nbsp;</p><p>Селище поділяється на неофіційні мікрорайони: &laquo;Центральний&raquo;, &laquo;23-тє&raquo;, &laquo;Заповіт&raquo;, &laquo;Річний&raquo;, &laquo;Сільгосптехніка&raquo;, &laquo;Новий масив&raquo;.</p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><h1 style="text-align: center;"><strong><span style="font-size: 24px;">Історія</span></strong></h1><p>Вперше згадується в середині XII ст. під назвою <em>Чортоліси</em>. Це дуже давній населений пункт на древлянській землі. В літописах зазначено, що існував так званий &laquo;Чортів ліс&raquo;, звідки й походить назва поселення. Ліс з такою назвою займав Ємільчинський район і частину Пулинського. Названий так за непрохідні хащі, болота, завали відмерлих дерев. Історичні пам&#39;ятки та документи свідчать про те, що Чортоліси знаходилися на одному зі старовинних шляхів, що вели з Києва на західні землі. Цей шлях проходив з Києва на Житомир, через Кам&#39;янку, Вільськ, Стару Олександрівку, Чортоліси, Соколівдо Новоград-Волинського. Ця дорога і зараз в народі називається <em>Старим шляхом</em>. А в архіві Південно-Західної Русі цей шлях іменується як &laquo;страшна Батиєва дорога&raquo;. Нею монголо-татари вели полонених, везли награбоване майно.</p><p><br></p><p>З XIV століття поселення належало зміцнілому Литовському князівству, а з XVI &mdash; польським феодалам. Про те, що до початку XVI століття населений пункт називався Чортоліси, свідчать документи.</p><p><br></p><p>Відомості про це знаходимо в багатотомному збірнику Яблонського &laquo;Жідла дійова&raquo; (том 13, Варшава, 1897&nbsp;р.). Це підтверджує і польський краєзнавчий журнал &laquo;Кознік волинські&raquo; (том 3, 1939&nbsp;р.).</p><p><br></p><p>У 1578 році поселення згадується під іншою назвою &mdash; <strong>Пулини</strong>. Вона походить від іншої назви, де фігурує слово <em>Пуль</em>, а <em>-ин</em> тільки суфікс, що підтверджує походження назви від іншого слова. В переказах, які зібрані на території сусіднього Хорошівського району, зазначається, що ця назва могла піти від прізвища <strong>Пулин</strong>. До речі, люди з таким прізвищем і зараз проживають у селах сусідніх районів. Отже, є підстави гадати, що від прізвища польських шляхтичів, що оселилися в Пулинах (Чортолісах), і пішла друга назва поселення &mdash; <strong>Пулини</strong>.</p><p>У XVIII столітті селяни Пулин брали участь у повстаннях проти польських магнатів. Коли в 1702&ndash;1704 роках на Волині відбувалося козацько-селянське повстання під проводом Семена Палія, в Пулинах піднялися на боротьбу козаки і селяни з сотником Коваленком. А в повстанні <a href="https://uk.wikipedia.org/wiki/1768" title="1768">1768</a> року, що дістало назву Коліївщина, активними учасниками були жителі Пулин П. Коновалов, П. Шанін, Г. Нечай із сином. У кодненській книзі судових справ їх імена занесені до числа страчених.</p><p>У другій половині <a href="https://uk.wikipedia.org/wiki/XVIII_%D1%81%D1%82%D0%BE%D0%BB%D1%96%D1%82%D1%82%D1%8F" title="XVIII століття">XVIII століття</a> Пулини належали Київському хорунжому Янові Ганському та його дружині Софії з роду <a href="https://uk.wikipedia.org/w/index.php?title=%D0%A1%D0%BA%D0%BE%D1%80%D1%83%D0%BF%D0%BA%D0%B8&action=edit&redlink=1" title="Скорупки (ще не написана)">Скорупків</a>. У 1796 р. це подружжя фундувало в Пулинах парафіяльний костел св. Яна Непомуцького, до якого належали каплиці в Баранах, <a href="https://uk.wikipedia.org/wiki/%D0%9F%D0%BE%D0%BA%D0%BE%D1%81%D1%82%D1%96%D0%B2%D0%BA%D0%B0" title="Покостівка">Покостівці</a>, <a href="https://uk.wikipedia.org/wiki/%D0%94%D0%B0%D0%B2%D0%B8%D0%B4%D1%96%D0%B2%D0%BA%D0%B0" title="Давидівка">Давидівці</a> і <a href="https://uk.wikipedia.org/wiki/%D0%A9%D0%B5%D1%80%D0%B1%D0%B8%D0%BD%D0%B8_(%D0%A7%D0%B5%D1%80%D0%BD%D1%8F%D1%85%D1%96%D0%B2%D1%81%D1%8C%D0%BA%D0%B8%D0%B9_%D1%80%D0%B0%D0%B9%D0%BE%D0%BD)" title="Щербини (Черняхівський район)">Щербинах</a>. Після їх смерті селище перейшло у володіння їх сина Вацлава Ганського, який у <a href="https://uk.wikipedia.org/wiki/1811" title="1811">1811</a> році був обраний Житомирським маршалком, себто очільником місцевого дворянства. Вацлав заснував поблизу Пулин село, яке було назване його ім&#39;ям &mdash; Вацлавпіль (нині <a href="https://uk.wikipedia.org/wiki/%D0%AF%D1%81%D0%BD%D0%B0_%D0%9F%D0%BE%D0%BB%D1%8F%D0%BD%D0%B0_(%D0%9F%D1%83%D0%BB%D0%B8%D0%BD%D1%81%D1%8C%D0%BA%D0%B8%D0%B9_%D1%80%D0%B0%D0%B9%D0%BE%D0%BD)" title="Ясна Поляна (Пулинський район)">Ясна Поляна</a>). До цього села <a href="https://uk.wikipedia.org/wiki/%D0%93%D0%B0%D0%BD%D1%81%D1%8C%D0%BA%D0%B8%D0%B9_%D0%92%D0%B0%D1%86%D0%BB%D0%B0%D0%B2" title="Ганський Вацлав">Вацлав Ганський</a> переселив усіх <a href="https://uk.wikipedia.org/wiki/%D0%A1%D1%82%D0%B0%D1%80%D0%BE%D0%BE%D0%B1%D1%80%D1%8F%D0%B4%D0%BD%D0%B8%D1%86%D1%82%D0%B2%D0%BE" title="Старообрядництво">старовірів</a>, які проживали в селах Пулинського ключа. У першій половині <a href="https://uk.wikipedia.org/wiki/XIX_%D1%81%D1%82%D0%BE%D0%BB%D1%96%D1%82%D1%82%D1%8F" title="XIX століття">XIX століття</a> Вацлав Ганський переніс свою резиденцію з Пулин до Верхівні. Там він одружився з дочкою воєводи Ржевуцького <a href="https://uk.wikipedia.org/wiki/%D0%95%D0%B2%D0%B5%D0%BB%D1%96%D0%BD%D0%B0_%D0%93%D0%B0%D0%BD%D1%81%D1%8C%D0%BA%D0%B0" title="Евеліна Ганська">Евеліною</a>, яка після смерті чоловіка стала дружиною відомого французького письменника <a href="https://uk.wikipedia.org/wiki/%D0%9E%D0%BD%D0%BE%D1%80%D0%B5_%D0%B4%D0%B5_%D0%91%D0%B0%D0%BB%D1%8C%D0%B7%D0%B0%D0%BA" title="Оноре де Бальзак">Оноре де Бальзака</a>.</p><p>З <a href="https://uk.wikipedia.org/wiki/1793" title="1793">1793</a> року, після долучення Правобережної України до <a href="https://uk.wikipedia.org/wiki/%D0%A0%D0%BE%D1%81%D1%96%D0%B9%D1%81%D1%8C%D0%BA%D0%B0_%D1%96%D0%BC%D0%BF%D0%B5%D1%80%D1%96%D1%8F" title="Російська імперія">Росії</a>, село Пулини ввійшло до <a href="https://uk.wikipedia.org/wiki/%D0%96%D0%B8%D1%82%D0%BE%D0%BC%D0%B8%D1%80%D1%81%D1%8C%D0%BA%D0%B8%D0%B9_%D0%BF%D0%BE%D0%B2%D1%96%D1%82" title="Житомирський повіт">Житомирського повіту</a>\r\n<a href="https://uk.wikipedia.org/wiki/%D0%92%D0%BE%D0%BB%D0%B8%D0%BD%D1%81%D1%8C%D0%BA%D0%B0_%D0%B3%D1%83%D0%B1%D0%B5%D1%80%D0%BD%D1%96%D1%8F" title="Волинська губернія">Волинської губернії</a>. Мешканці села займалися землеробством, ремеслом, торгівлею. Селяни-кріпаки працювали на панщині. Експлуатація їх не мала меж. У <a href="https://uk.wikipedia.org/wiki/1845" title="1845">1845</a> році, коли цар <a href="https://uk.wikipedia.org/wiki/%D0%9C%D0%B8%D0%BA%D0%BE%D0%BB%D0%B0_I_(%D1%80%D0%BE%D1%81%D1%96%D0%B9%D1%81%D1%8C%D0%BA%D0%B8%D0%B9_%D1%96%D0%BC%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%BE%D1%80)" title="Микола I (російський імператор)">Микола І</a>, здійснюючи поїздку до Брест-Литовська, зупинився в Пулинах, селяни передали йому скаргу на місцевого пана Качковського. Монарх наказав покарати селян.</p><p><br></p><p>У жовтні <a href="https://uk.wikipedia.org/wiki/1846" title="1846">1846</a> року через Пулини двічі проїздив відомий український поет <a href="https://uk.wikipedia.org/wiki/%D0%A8%D0%B5%D0%B2%D1%87%D0%B5%D0%BD%D0%BA%D0%BE_%D0%A2%D0%B0%D1%80%D0%B0%D1%81_%D0%93%D1%80%D0%B8%D0%B3%D0%BE%D1%80%D0%BE%D0%B2%D0%B8%D1%87" title="Шевченко Тарас Григорович">Тарас Григорович Шевченко</a>. Ставши співробітником Київської археографічної комісії, Шевченко зібрав легенди, перекази, стародавні акти, розповіді про кургани, історичні пам&#39;ятки. Шлях поета пролягав через цей край, зокрема Пулини та Соколів. Про це зберігається запис у подорожньому листі, з яким подорожував поет. У кінці жовтня того ж року, повертаючись до Києва, Т.&nbsp;Г.&nbsp;Шевченко знову побував у Пулинах.</p><p><br></p><p>У центрі селища</p><p>Після скасування кріпацтва (в <a href="https://uk.wikipedia.org/wiki/1861" title="1861">1861</a> році) в Пулинах пришвидшився розвиток ремесла і промисловості. Тут діяли свічковий завод, фабрика гнутих меблів, дві слюсарні майстерні та сірникова фабрика.</p><p><a href="https://uk.wikipedia.org/wiki/1870" title="1870">1870</a> року тут було близько 130 дворів, а вже в 1899&mdash;334 з населенням 2125 чоловік.</p><p>Станом на <a href="https://uk.wikipedia.org/wiki/1885" title="1885">1885</a> рік у колишньому власницькому містечку, центрі <a href="https://uk.wikipedia.org/wiki/%D0%9F%D1%83%D0%BB%D0%B8%D0%BD%D1%81%D1%8C%D0%BA%D0%B0_%D0%B2%D0%BE%D0%BB%D0%BE%D1%81%D1%82%D1%8C" title="Пулинська волость">Пулинської волості</a>, мешкало 552 особи, налічувалось 71 дворове господарство, існували костел, католицька каплиця, синагога, єврейський молитовний будинок, школа, 2 постоялих будинки, торговельна лавка, лазня, ковбасний завод, відбувалися базари у неділі і 2 <a href="https://uk.wikipedia.org/wiki/%D0%AF%D1%80%D0%BC%D0%B0%D1%80%D0%BE%D0%BA" title="Ярмарок">ярмарки</a> на рік.</p><p>За переписом <a href="https://uk.wikipedia.org/wiki/1897" title="1897">1897</a> року кількість мешканців зросла до 2736 осіб (1370 чоловічої статі та 1366 &mdash; жіночої), з яких 1055 &mdash; православної віри, 1168 &mdash; юдейської, 344 &mdash; протестантської.</p><p>На початку XX століття в Пулинах стали до ладу: чавунно-ливарний завод, паровий млин, два пивоварні заводи, цегельня, де, крім цегли, виробляли черепицю, гончарний посуд. Розвиток промисловості сприяв зростанню чисельності населення.</p><p>Напередодні <a href="https://uk.wikipedia.org/wiki/%D0%9F%D0%B5%D1%80%D1%88%D0%B0_%D1%81%D0%B2%D1%96%D1%82%D0%BE%D0%B2%D0%B0_%D0%B2%D1%96%D0%B9%D0%BD%D0%B0" title="Перша світова війна">Першої світової війни</a> в Пулинах нараховувалося 4630 чоловік. За 15 років (<a href="https://uk.wikipedia.org/wiki/1899" title="1899">1899</a>&ndash;<a href="https://uk.wikipedia.org/wiki/1914" title="1914">1914</a>) кількість мешканців зросла на 2,5 тисячі. У роки визвольних змагань Пулин був тереном тривалих бойових дій, які закінчилися в червні <a href="https://uk.wikipedia.org/wiki/1920" title="1920">1920</a>року російською окупацією та встановленням радянської влади.</p><p>4 листопада 1921 р. під час <a href="https://uk.wikipedia.org/wiki/%D0%94%D1%80%D1%83%D0%B3%D0%B8%D0%B9_%D0%B7%D0%B8%D0%BC%D0%BE%D0%B2%D0%B8%D0%B9_%D0%BF%D0%BE%D1%85%D1%96%D0%B4" title="Другий зимовий похід">Листопадового рейду</a> через Пулини проходила Подільська група (командувач <a href="https://uk.wikipedia.org/wiki/%D0%A7%D0%BE%D1%80%D0%BD%D0%B8%D0%B9_%D0%A1%D0%B5%D1%80%D0%B3%D1%96%D0%B9_%D0%86%D0%B2%D0%B0%D0%BD%D0%BE%D0%B2%D0%B8%D1%87" title="Чорний Сергій Іванович">Сергій Чорний</a>) <a href="https://uk.wikipedia.org/wiki/%D0%90%D1%80%D0%BC%D1%96%D1%8F_%D0%A3%D0%BA%D1%80%D0%B0%D1%97%D0%BD%D1%81%D1%8C%D0%BA%D0%BE%D1%97_%D0%9D%D0%B0%D1%80%D0%BE%D0%B4%D0%BD%D0%BE%D1%97_%D0%A0%D0%B5%D1%81%D0%BF%D1%83%D0%B1%D0%BB%D1%96%D0%BA%D0%B8" title="Армія Української Народної Республіки">Армії Української Народної Республіки</a>.</p><p>Постановою Президії Центрального Виконавчого Комітету <a href="https://uk.wikipedia.org/wiki/%D0%A3%D0%A0%D0%A1%D0%A0" title="УРСР">УРСР</a> 3-го жовтня <a href="https://uk.wikipedia.org/wiki/1935" title="1935">1935</a> року Пулини перейменовано на Червоноармійськ.</p><p>Восени 1936 року із Червоноармійська до <a href="https://uk.wikipedia.org/wiki/%D0%9A%D0%B0%D1%80%D0%B0%D0%B3%D0%B0%D0%BD%D0%B4%D0%B8%D0%BD%D1%81%D1%8C%D0%BA%D0%B0_%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C" title="Карагандинська область">Карагандинської області</a>\r\n<a href="https://uk.wikipedia.org/wiki/%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D1%82%D0%B0%D0%BD" title="Казахстан">Казахстану</a> радянською владою було переселено 48 родин (246 осіб), з них 8 &mdash; польських і 40 &mdash; німецьких. Серед виселених 127 дорослих і 119 дітей.</p><p>У роки <a href="https://uk.wikipedia.org/wiki/%D0%9D%D1%96%D0%BC%D0%B5%D1%86%D1%8C%D0%BA%D0%BE-%D1%80%D0%B0%D0%B4%D1%8F%D0%BD%D1%81%D1%8C%D0%BA%D0%B0_%D0%B2%D1%96%D0%B9%D0%BD%D0%B0" title="Німецько-радянська війна">німецько-радянської війни</a> 447 жителів жителів селища воювало на різних фронтах. 207 воїнів не повернулися з фронту, 240 &mdash; удостоєні високих нагород Батьківщини. Серед них кавалер ордена Леніна І. А. Тузюк, повний кавалер ордена Слави І. Т. Дубина, він же &mdash; один з героїв книг &laquo;Солдатська слава&raquo; та &laquo;Зірки солдатської слави&raquo;.</p><p>19 травня 2016 року Верховна Рада України поіменним голосуванням підтримала проект постанови № 4085, яким передбачено, зокрема, повернення селищу історичної назви <strong>Пулини</strong>.</p><p><br></p><p><br></p><p><img src="https://i.froala.com/download/cc47baeb998b01d504e0c40fd218a04bb3b0084c.jpg?1527357093" style="width: 415px; height: 311.25px;" class="fr-fic fr-fil fr-dii"><img src="https://i.froala.com/download/32ba10f33486313e3a65028fb2b92c7859f57da0.jpg?1527357723" style="width: 466px; height: 310.282px;" class="fr-fic fr-fil fr-dii"></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>'),
(8, 'Головна', 'holovna', 'Головна сторінка сайту', 'Головна сторінка сайту', '<p>Головна сторінка сайту</p>'),
(9, 'Додати оголошення', 'dodaty-oholoshennya', 'dodaty-oholoshennya', 'dodaty-oholoshennya', '<p>dodaty-oholoshennya</p>'),
(10, 'Перегляд оголошення', 'perehlyad-oholoshennya', 'perehlyad-oholoshennya', 'perehlyad-oholoshennya', '<p>perehlyad-oholoshennya</p>'),
(11, 'Новини', 'novyny', 'Новини', 'Новини', '<p>Новини</p>');

-- --------------------------------------------------------

--
-- Структура таблиці `wm_users`
--

CREATE TABLE `wm_users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `is_admin` varchar(255) NOT NULL,
  `block` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Користувачі';

--
-- Дамп даних таблиці `wm_users`
--

INSERT INTO `wm_users` (`id`, `login`, `password`, `image`, `first_name`, `last_name`, `e_mail`, `is_admin`, `block`) VALUES
(1, 'Administrator', '2e45cbf5233f01e97be341beecd49d21', '\\uploads\\users\\Administrator_Photo.jpg', 'Дмитро', 'Адамович', 'program.malik@gmail.com', 'bd3a3694f105586ef6d1745cc5de5dd3', 0),
(2, 'WebMaLik', '2e45cbf5233f01e97be341beecd49d21', '\\uploads\\users\\WebMaLik_Photo.png', 'Dmytro', 'Adamovych', 'office.webmalik@webmail.pro', 'bd3a3694f105586ef6d1745cc5de5dd3', 0),
(3, 'User', 'e1a494183d38e047cf8615b94ee4c728', '/uploads/users/user.jpg', 'Test', 'User', 'test@user.com', '', 1),
(5, 'ZDTU', 'e1a494183d38e047cf8615b94ee4c728', '/uploads/users/user.jpg', 'Dekanat', 'FIKT', 'fikt@zdtu.edu.ua', '', 0),
(6, 'Vlad', 'e1a494183d38e047cf8615b94ee4c728', '\\uploads\\users\\Vlad_45.jpg', 'Владимир', 'Адамович', 'vlad257209@gmail.com', '', 0),
(7, 'aaa', 'fdec0cb6d1039903cca8031534f49cb8', '/uploads/users/user.jpg', 'ann', 'dan', 'k@ukr.net', '', 1),
(8, 'Dima', '9f4705a9c66794acc4a6178852d21a4f', '/uploads/users/user.jpg', 'Dima', 'Adam', 'gfd@gmail.com', '', 0);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `wm_advertisement`
--
ALTER TABLE `wm_advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `wm_articles`
--
ALTER TABLE `wm_articles`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `wm_chat`
--
ALTER TABLE `wm_chat`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `wm_comments`
--
ALTER TABLE `wm_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news` (`news`),
  ADD KEY `user` (`user`);

--
-- Індекси таблиці `wm_pages`
--
ALTER TABLE `wm_pages`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `wm_users`
--
ALTER TABLE `wm_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `wm_advertisement`
--
ALTER TABLE `wm_advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблиці `wm_articles`
--
ALTER TABLE `wm_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблиці `wm_chat`
--
ALTER TABLE `wm_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблиці `wm_comments`
--
ALTER TABLE `wm_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблиці `wm_pages`
--
ALTER TABLE `wm_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблиці `wm_users`
--
ALTER TABLE `wm_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `wm_comments`
--
ALTER TABLE `wm_comments`
  ADD CONSTRAINT `wm_comments_ibfk_1` FOREIGN KEY (`news`) REFERENCES `wm_articles` (`id`),
  ADD CONSTRAINT `wm_comments_ibfk_2` FOREIGN KEY (`user`) REFERENCES `wm_users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
