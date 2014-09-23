<?php

    /**
     * Need to keep this as array() vs. [] for Transilex
     */
    $messages = array(
        'language_text'                   => 'Английский',
        'download'                        => 'Скачать',
        'documentation'                   => 'Документация',
        'forum'                           => 'Форум',
        'blog'                            => 'Блог',
        'support'                         => 'Поддержка',
        'donate'                          => 'Пожертвовать',
        'store'                           => 'Магазин',
        'github'                          => 'GitHub',
        'phalcon_description'             => "<strong>Phalcon</strong> - это веб фреймворк, реализованный в виде написанного на C PHP расширения, который характеризуется <a href=':1:'>высокой производительностью</a>  при меньшем потреблении ресурсов ",
        'the_fastest_php_framework'       => 'Самый быстрый <br /> PHP Framework',
        'try_online'                      => 'Попробовать Online',
        'see_screencasts'                 => 'Скринкасты',
        'everything_you_need_upper'       => 'ВСЁ ЧТО НУЖНО',
        'full_mvc_applications'           => "Полноценные <a href=':1:'>MVC</a> приложения",
        'single_module'                   => 'Одно-модульные',
        'multi_module'                    => 'Мульти-модульные',
        'micro_applications'              => 'Микро приложения',
        'orm'                             => 'ORM',
        'transactions'                    => 'Транзакции',
        'behaviors'                       => 'Поведения',
        'relations'                       => 'Отношения',
        'phql'                            => 'PHQL',
        'events'                          => 'События',
        'validations'                     => 'Валидация',
        'hydration'                       => 'Hydration',
        'logging'                         => 'Логирование',
        'profiling'                       => 'Профилирование',
        'sharding'                        => 'Шардинг',
        'odm_for_mongo'                   => 'ODM для Mongo',
        'template_engine_volt'            => 'Шаблонизатор (Volt)',
        'di_ioc'                          => 'DI/IOC',
        'events_management'               => 'Менеджер событий',
        'encryption'                      => 'Шифрование',
        'http_request'                    => 'HTTP Request',
        'http_response'                   => 'HTTP Response',
        'http_cookies'                    => 'Cookies',
        'escaping'                        => 'Контекстное экранирование',
        'filtering'                       => 'Фильтрация',
        'forms_builder'                   => 'Конструктор форм',
        'forms_validation'                => 'Валидация',
        'flash_messages'                  => 'Информационные сообщения',
        'cache'                           => 'Кэш',
        'pagination'                      => 'Постраничная навигация',
        'annotations'                     => 'Аннотации',
        'security'                        => 'Безопасность',
        'translations'                    => 'Интернационализация',
        'assets_management'               => 'Управление ресурсами',
        'universal_auto_loader'           => 'Универсальный загрузчик классов',
        'cli'                             => 'CLI',
        'phalcon_forum_upper'             => 'ФОРУМ PHALCON',
        'stack_overflow_upper'            => 'STACK OVERFLOW',
        'github_upper'                    => 'GITHUB',
        'email_us_upper'                  => 'EMAIL',
        'services_upper'                  => 'УСЛУГИ',
        'consulting_upper'                => 'КОНСАЛТИНГ',
        'requirements_analysis'           => 'Анализ требований',
        'implementation'                  => 'Реализация',
        'ongoing_support'                 => 'Постоянная поддержка',
        'read_more'                       => 'Подробнее',
        'hosting_upper'                   => 'ХОСТИНГ',
        'phalcon_can_be_installed'        => 'Phalcon может быть установлен на',
        'main_upper'                      => 'ГЛАВНОЕ',
        'consulting'                      => 'Консалтинг',
        'hosting'                         => 'Хостинг',
        'support_upper'                   => 'ПОДДЕРЖКА',
        'forum_community'                 => 'Форум / Сообщество',
        'stack_overflow'                  => 'Stack Overflow',
        'issue_tracker'                   => 'Трекер вопросов',
        'get_involved_upper'              => 'УЧАСТИЕ',
        'team'                            => 'О команде',
        'about'                           => 'О проекте',
        'roadmap'                         => 'План развития',
        'donate_to_phalcon'               => 'Поддержать Phalcon:',
        'or'                              => 'или',
        'twitter'                         => 'Twitter',
        'facebook'                        => 'Facebook',
        'google_plus'                     => 'Google Plus',
        'vimeo'                           => 'Vimeo',
        'amazing_contributors'            => 'Наши замечательные участники проекта',

        'download_phalcon'                => 'Скачать Phalcon',
        'download_linux'                  => 'Linux/Unix/Mac',
        'download_windows'                => 'Windows DLLs',
        'download_developer_tools'        => 'Developer Tools',
        'download_ide_stubs'              => 'Поддержка IDE',
        'download_ubuntu'                 => 'To install Phalcon on Ubuntu you need to follow these steps:',
        'download_ubuntu_1'               => 'If you are missing apt-add-repository run the following command:',
        'download_note'                   => 'Phalcon является PHP расширением на языке C, поэтому вам нужно скачать бинарный файл для вашей платформы или скомпилировать его из исходных кодов.',
        'download_compilation'            => 'Компиляция',
        'download_compilation_1'          => 'В Linux проще собрать и установить расширение из исходного кода.',
        'download_requirements'           => 'Требования',
        'download_requirements_1'         => 'Необходимо предварительно установить следующие пакеты:',
        'download_requirements_2'         => 'Инструменты разработки PHP 5.x',
        'download_requirements_3'         => 'Компилятор GCC',
        'download_compilation_11'         => '1. Чтобы собрать расширение из исходного кода, выполните следующие действия:',
        'download_compilation_12'         => '2. Добавьте в файл php.ini:',
        'download_compilation_13'         => '3. Перезапустите веб сервер',
        'download_debian'                 => 'Debian',
        'download_debian_1'               => "Любезно предоставленный <a href=':1:'>FortRabbit</a> репозитарий находится  <a href=':2:'>здесь</a>",
        'download_debian_2'               => 'Пакет называется php5-phalcon',
        'download_arch'                   => 'Arch Linux',
        'download_arch_1'                 => "Существует PKGBUILD для ArchLinux, доступное <a href=':1:'>здесь</a>",
        'download_opensuse'               => 'OpenSUSE',
        'download_opensuse_1'             => "Существует пакет, доступный <a href=':1:'>здесь</a> (благодаря <a href=':2:'>Mariusz Łączak</a>)",
        'download_freebsd'                => 'FreeBSD',
        'download_freebsd_1'              => 'Порт доступен для FreeBSD. Необходимо выполнить одну из следующих команд для его установки:',
        'download_dependencies'           => 'Зависимости',
        'download_dependencies_1'         => 'Не смотря на то, что бинарный код Phalcon не содержит связей со сторонними расширениями, он использует функционал некоторых из них. Используемые расширения:',
        'download_dependencies_2'         => 'Нет необходимости устанавливать все перечисленные расширения для использования Phalcon. Вы можете установить только те расширения, которые необходимы в вашем конкретном случае. Например, если вы используете базу данных MySQL, вы можете загрузить только PDO и PDO/MySQL, игнорируя Oracle, SQlite, Postgresql и Mongo.',
        'download_need_help'              => 'Нужна помощь?',
        'download_need_help_1'            => "Если вам необходима помощь, на нашей <a href=':1:'>странице поддержки</a> вы найдёте ссылки на дополнительные ресурсы. Мы всегда готовы помочь вам.",

        'download_windows_note'           => 'Мы настоятельно рекомендуем вам использовать последние версии PHP и соответствующие DLL, чтобы воспользоваться полным набором возможностей Phalcon.',
        'download_windows_stable'         => 'Stable/Master версии',
        'download_windows_installation'   => 'Установка',
        'download_windows_installation_1' => "Для использования phalcon в Windows вы можете скачать DLL библиотеку. Отредактируйте ваш php.ini, добавив в конце подключение модуля, и перезагрузите ваш веб-сервер, чтобы применить изменения. <a href=':1:'>Подробнее</a>.",
        'download_windows_guides'         => 'Краткое руководство',
        'download_windows_guides_xampp'   => 'Установка на XAMPP',
        'download_windows_guides_wamp'    => 'Установка на WAMP',
        'download_windows_alpha'          => 'Alpha/Beta версии',
        'download_source_code'            => "Исходный код: <a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_source_code_switch'     => "Исходный код (пожалуйста, переключитесь в соответствующую ветку): <a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_no_alpha_beta'          => 'В данный момент нет доступных alpha/beta версий.',
        'download_windows_older'          => 'Устаревшие версии',

        'download_devtools_1'             => 'Эти инструменты представляют собой набор полезных скриптов для создания основы приложения. Основные компоненты приложения можно создать с помощью простых команд, что позволяет легко разрабатывать приложения, используя Phalcon.',
        'download_devtools_docs'          => "Документация: <a href=':1:'>Phalcon Developer Tools</a>",
        'download_devtools_composer'      => 'Установка с помощью Composer',
        'download_devtools_composer_1'    => 'Установите composer в общую директорию или в ваш проект:',
        'download_devtools_composer_2'    => 'Создайте файл composer.json и напишите в нем:',
        'download_devtools_composer_3'    => 'Выполните установку с помощью composer:',
        'download_devtools_composer_4'    => 'Создайте символическую ссылку на файл phalcon.php:',
        'download_devtools_download'      => 'Вы можете скачать или клонировать кроссплатформенный пакет, содержащий developer tools с <a href=":1:">Github</a>.',

        'download_vagrant'                => 'Vagrant',
        'download_vagrant_boxes'          => 'Боксы Vagrant',
        'download_vagrant_1'              => "<a href=':1:'>Vagrant</a> является отличным средством для создания и конфигурации легковесных, воспроизводимых и портативных средств разработки.",
        'download_vagrant_2'              => "Используйте любой из подготовленных боксов для разработки с использованием Phalcon.",
        'download_box_1'                  => "Бокс #1",
        'download_box_2'                  => "Бокс #2",
        'download_box_user_pass'          => "MySQL Пользователь: :1: Пароль: :2:",
        'download_box_doc_root'           => "Корневой Root каталог: :1:",
        'download_examples'               => "Предустановленные примеры",
        'download_examples_1'             => "Следующие примеры установлены в наших vagrant боксах:",

        'consulting_header'               => "We have partnered with <a href=':1:'>LEZGRO</a>, a company that specializes in web and mobile application development and is very adept in delivering Phalcon powered applications to their clientele.",
        'consulting_lezgro_1'             => "<a href=':1:'>LEZGRO</a> congratulates you with the your choice of making Phalcon central in your technology stack!",
        'consulting_lezgro_2'             => "Since our company first saw the light of the day in 2003, we have tried various technologies and approaches in software development.",
        'consulting_lezgro_3'             => "Product managers, CTOs, and non-technical founders involve <a href=':1:'>LEZGRO</a> to build products that stand out, quickly and with a high quality.",
        'consulting_lezgro_4'             => "Now that we have acquired positive experience with Phalcon, we are open to advise you on making the decision to develop on Phalcon, and help you bring your Phalcon-based product to market.",
        'consulting_lezgro_5'             => "Contact LEZGRO through their <a href=':1:'>website</a>, where you can also see samples and testimonials of their work.",
        
        'requirements_analysis_1'         => 'Одна из самых больших проблем, с которыми сталкиваются разработчики, является тот факт, что многие проекты не имеют чётко сформулированного технического задания. Поэтому, чаще всего, то, чего хочет клиент, полностью отличается от того, что понимает разработчик и, соответственно, реализует.',
        'requirements_analysis_2'         => 'Мы можем предложить услуги по анализу требований клиентов, обсуждению деталей с клиентами и реализации этих требований в виде конкретного технического задания для разработчиков.',
        'implementation_1'                => 'Если вы хотите нанять нас для разработки приложения, мы были бы более чем счастливы сделать это. Используя новейшие технологии, мы можем предложить надежное решение для вашей задачи или проекта с полным пакетом тестов и документации.',
        'ongoing_support_1'               => 'Клиентам, которые заинтересованы в постоянном контракте на техническую поддержку, мы можем предложить эту услугу для их проектов на постоянной основе. Они могут приобрести часы поддержки (минимум 2 часа) за 50 USD в час.',
        'ongoing_support_2'               => 'Часы технической поддержки не имеют ограничений по срокам действия и могут быть использованы по мере необходимости. Клиентам, которые хотят использовать непрерывную схему поддержки, мы предлагаем гибкие планы, чтобы удовлетворить их потребности наилучшим образом.',
        'sponsors'                        => 'Спонсоры',
        'sponsors_1'                      => 'Тем, кто желает спонсировать нашу работу и дальнейшее развитие Phalcon, мы предлагаем различные варианты спонсорства, которые будут соответствовать любому бюджету.',
        'sponsors_2'                      => 'Кроме того, заказчики могут запросить установку определенных функциональностей, реализация которых обычно занимает значительно больше времени по причине их востребованности или сложности. Мы, безусловно, можем реализовать такие запросы в рамках наших обычных тарифов.',
        'contact'                         => 'Контакты',
        'contact_1'                       => "<a href=':1:'>Свяжитесь с нами</a>, чтобы обсудить ваши требования, и позвольте нам предложить решение, которое наилучшим образом будет соответствовать вашим потребностям и вашему бюджету. Ни один проект не является слишком большим или слишком маленьким.",

        'phalcon_team'                    => 'Команда Phalcon',
        'team_andres_1'                   => 'Андрес &mdash; не случайный человек в open-source сообществе. Последние девять лет он разрабатывает и выпускает фреймворки для PHP и принимает участие в веб-разработке &mdash; его главной страсти.',
        'team_andres_2'                   => "Лидер списка TR35, Андрес руководствуется принципом \"всегда выбирать и реализовывать или использовать правильный инструмент для работы, ориентированной, главным образом, на высокую производительность\". Поэтому в 2011 году появилась идея: создать новый тип фреймворка для PHP разработчиков, который фокусируется на удобстве, функциональности и высокой производительности.",
        'team_andres_3'                   => 'В результате реализации этой идеи появился Phalcon. PHP фреймворк, написанный на C, который может предложить массу возможностей для разработчиков при максимальной производительности и минимальном использовании ресурсов системы.',
        'team_andres_4'                   => 'Андрес является одним из основных разработчиков Phalcon и его идейным вдохновителем.',
        'team_nikos_1'                    => 'Никос работает в ИТ-индустрии более 20 лет. Он пришёл в мир PHP в 2000 году и с тех пор использует его в личных проектах, а также проектах своих работодателей.',
        'team_nikos_2'                    => 'Ему нравится открывать новые технологии и способы их интеграции с существующими приложениями и, таким образом, использовать преимущества, которые они предлагают.',
        'team_nikos_3'                    => 'Он заядлый сторонник Test Driven Development (TDD) и всегда старается получить полное покрытие кода.',
        'team_nikos_4'                    => "Постоянный интерес Никоса к инновационным технологиям, нарушающим традиционные подходы, познакомил его с Phalcon. Он присоединился к команде и в настоящий момент его задачи в основном связаны c координацией запросов на новые функциональности и исправления ошибок, тестированием, подготовкой документации и работой с инкубатором. Никос также отвечает за поддержание Windows библиотеки DLL для проекта и оказывает другую  помощь.",
        'team_nikolay_1'                  => 'Николай занимается разработкой веб-приложений уже более 10 лет. Он принимал участие в проектах с высокой нагрузкой.',
        'team_nikolay_2'                  => 'Николай работает с Open Source проектами в течение длительного времени, используя их во всех случаях, когда это позволяют требования. В свободное время он начал сотрудничать с сообществом, предлагая архитектурные изменения и высказывая различные идеи по оптимизации, в том числе, с целью повышения производительности. Он сыграл важную роль в улучшении Open Source CMS проектов, которое получило высокую оценку сообщества.',
        'team_nikolay_3'                  => 'Его постоянное участие в open source проектах помогло ему повысить свой уровень профессионализма и, в то же время, внести вклад в развитие сообщества.',
        'team_nikolay_4'                  => 'Николай является ярым сторонником максимальной производительности в веб-приложениях. После вступления в команду Phalcon он решил продолжить работу с проектом и стать его проповедником. Он возглавляет русское сообщество и осуществляет поддержку русскоязычных ресурсов.',
        'team_nikolay_5'                  => "Его вклад в проект: зеркало основного сайта на русском языке (<a href=':1:'>http://www.phalconphp.ru</a>), зеркало репозитория документации на русском языке (<a href = ':2:'>http://docs.phalconphp.ru</a>), текущие изменения и исправления в документации на английском языке, группа в социальной сети ВКонтакте (<a href=':3:'>http://vk.com/phalconphp</a>).",

        'get_involved'                    => 'Участие',
        'about_description_1'             => "Удивительным проектам &mdash; удивительные руки. Возможно, мы ещё не знакомы, но мы думаем, что вы могли бы идеально подойти для разработки лучших веб приложений. Вместе мы готовы изменить мир! Здесь, в Phalcon, мы создаем PHP фреймворк нового поколения. Мы хотим предложить вам потрясающую производительность, которая позволяет программировать в простой и увлекательной форме.",
        'about_description_2'             => "We hope that you enjoy Phalcon as much as we do. We always welcome your collaboration and help! <strong>You don't have to be a C developer to help Phalcon!</strong> There are many other areas that you can contribute:",
        'about_translations_1'            => "Мы стремимся охватить широкий круг разработчиков, преодолевая языковые барьеры. Мы используем <a href=':1:'>:2:</a>, чтобы обрабатывать все слова или предложения, которые необходимо перевести для этого сайта. Репозиторий проекта расположен <a href=':3:'>здесь</a>, а ниже вы можете увидеть результат наших усилий по переводу на данный момент.",
        'documentation_upper'             => 'ДОКУМЕНТАЦИЯ',
        'about_documentation_1'           => "The repository of this website is available on <a href=':1:'>github</a>. We are using <a href=':2:'>readthedocs</a> to manage our documentation.<br /><br />We always appreciate corrections, additions and enhancements in our documentation, so all you have to do is clone the repository and issue a pull request!<br /><br />If you can help non English speaking developers by translating some of the content to another language, that would be great!",
        'screencasts'                     => 'Скринкасты',
        'about_screencasts_1'             => "Нам всем нравится смотреть видеоролики. Если у вас есть немного свободного времени, и вы хотите помочь сообществу с представлением какого-либо функционала фреймворка,  создайте небольшой скринкаст. Это будет здорово! Посмотрите наш <a href=':1:'>Vimeo канал</a> в качестве примера.",
        'tests'                           => 'Тесты',
        'about_tests_1'                   => "В любом программном обеспечении могут быть ошибки. Если вы обнаружили новую ошибку, пожалуйста, сразу сообщите нам. У нас есть набор тестов с более, чем <a href=':1:'>8000</a> проверками. Тем не менее, unit-tests не могут охватить все возможные варианты. Помогите нам улучшить наши TestSuite за счет добавления новых условий проверок или улучшения существующих. Каждый добавленный тест делает фреймворк стабильнее.",
        'sample_applications'             => 'Примеры приложений',
        'about_sample_apps_1'             => 'Большое количество примеров помогают другим лучше понять, как с помощью Phalcon можно создать крупные проекты. Не стесняйтесь делиться ссылками на ваши проекты или примеры приложений. Это позволит другим программистам улучшить свои навыки использования фреймворка, а вы сможете получить отзывы о вашей работе!',
        'evangelism'                      => 'Евангелизм',
        'about_evangelism_1'              => "Многие до сих пор ещё не догадываются о существовании Phalcon или сомневаются, что он действительно работает. Мы уверены, что многие разработчики только выиграют от того, что узнают о Phalcon, о том, как он может помочь им. Если вам известно о каком-либо PHP событии/встрече, и вы хотите выступить с докладом о проекте, мы вас полностью поддержим. Кто не хотел бы узнать об инструменте, который так преобразовывает разработку под PHP?",
        'share_your_experiences'          => 'Поделитесь своим опытом',
        'about_share_experiences_1'       => "Не стесняйтесь делиться с сообществом вашим опытом работы с Phalcon. Если Phalcon помог вашему проекту достичь успеха, расскажите об этом. Кроме того, принимайте участие в обсуждении, какие компоненты нуждаются в доработке, что можно было бы сделать проще, какие преимущества в разработке вам дал Phalcon. Хотя не все функциональности могут быть реализованы немедленно, ваши замечания и отзывы позволят значительно помочь нам определить будущее проекта. Ваши отзывы помогают нам делать Phalcon лучше.",
        'about_blog_1'                    => "Если вам нравится писать статьи, не забудьте, что <a href=':1:'>наш блог</a> открыт для добавления обучающих статей, написанных вами. Если у вас есть собственный блог и вы написали что-то о Phalcon, мы также можем опубликовать анонс на наших страницах социальных сетей, чтобы как можно больше людей смогли прочитать вашу статью. Если ваш блог не на английском языке, мы разместим информацию о нём и, возможно, сможем перевести представленные материалы. Если вы знаете какие-либо сайты, посвящённые PHP, которые заинтересованы в представлении нашего проекта своей аудитории, пожалуйста, сообщите нам.",
        'donations_sponsoring'            => 'Пожертвования / Спонсорство',
        'about_sponsoring_1'              => "Мы &mdash; маленькая, но эффективная команда разработчиков, работающих не покладая рук. Мы стараемся уделять проекту как можно больше времени. Наша страсть к этому проекту заставляет нас совершенствоваться каждый день. Phalcon является программным обеспечением с открытым кодом и развивается с помощью усилий добровольцев. Вы можете помочь нам продолжить активно развивать проект с помощью пожертвований или спонсорской поддержки. Чем больше времени и ресурсов будет затрачено на проект, тем быстрее он будет развиваться и тем больше удивительных возможностей будет реализовано.",
        'social_networks'                 => 'Социальные сети',
        'about_social_networks_1'         => "Phalcon развивается ежедневно, ведомый нашим желанием сделать его лучше. Социальные сети сейчас являются частью нашей жизни и все мы общаемся с другими людьми через них. Совместное обсуждение опыта работы с Phalcon в кругу ваших знакомых значительно увеличит интерес к проекту. Все больше и больше людей будет вступать в наше сообщество, что сделает его продуктивнее, сильнее и популярнее. Ставьте Лайк, '+1', 'поделиться', участвуя в обсуждениях вопросов, касающихся Phalcon. Люди, которые узнают о Phalcon через вашу активность в социальных сетях, будут вам благодарны!",
        'about_social_networks_2'         => "Мы присутствуем в большинстве популярных социальных сетях. Подписываясь на нас, вы помогаете увеличить популярность проекта:",
        'follow_on_twitter'               => 'Подписаться в Twitter',
        'facebook_page'                   => 'Страница на Facebook',
        'google_plus_page'                => 'Страница на Google+',
        'official_blog'                   => 'Официальный блог',
        'star_on_github'                  => 'Добавьте нам звезд на Github',
        'thank_you'                       => 'Спасибо!',
        'about_thank_you_1'               => 'Мы благодарим всех наших разработчиков и членов сообщества за вклад в процесс создания лучшего в своём роде фреймворка. Ваша поддержка помогает нам двигаться в достижении этой цели. Мы надеемся, что Phalcon оправдает или превзойдёт то доверие, которое вы оказали ему.',
        'flying_with_phalcon'             => 'Спасибо за полет вместе с Phalcon! &lt;3',

        'hosting_description'             => 'Phalcon может быть установлен на любом сервере, к которому хостинг-провайдер предоставляет SSH доступ с root правами (или sudo). Ниже приведен список известных компаний, которые предлагают такие услуги:',
        'hosting_fortrabbit_title'        => 'Fortrabbit',
        'hosting_fortrabbit_1'            => 'Fortrabbit предлагает множество тарифов (есть один для разработчиков и бесплатный - с некоторыми ограничениями), чтобы удовлетворить потребности большинства разработчиков, которые хотели бы попробовать Phalcon или развернуть свои приложения, использующие его.',
        'hosting_fortrabbit_2'            => "Они предлагают множество <a href=':1:'>расширений</a>, которые удовлетворят даже самый требовательный проект.",
        'hosting_fortrabbit_3'            => 'Стабильная версия Phalcon предварительно установлена. Модуль можно активировать в панели администрирования.',
        'hosting_webfaction_title'        => 'WebFaction',
        'hosting_webfaction_1'            => 'WebFaction хостинг для разработчиков. Полный доступ к быстрым серверам с предустановленными вашими любимыми инструментами ​​и технической поддержкой для пользователей.',
        'hosting_webfaction_2'            => "Для установки PhalconPHP в WebFaction следуйте инструкциям, приведенным <a href=':1:'>здесь</a>",
        'hosting_amazon_ec2_title'        => 'Amazon EC2',
        'hosting_amazon_ec2_1'            => 'Amazon Elastic Compute Cloud предоставляет масштабируемые, оплачиваемые по факту, вычислительные ресурсы в облаке.',
        'hosting_amazon_ec2_2'            => "Выберите предварительно настроенный образ шаблона машины Amazon(AMI), чтобы сразу приступить к работе. Или создайте AMI, содержащий приложения, библиотеки, данные и соответствующие настройки конфигурации. <a href=':1:'>Подробнее</a>",
        'hosting_linode_title'            => "Linode",
        'hosting_linode_1'                => "Развертывайте и управляйте виртуальными серверами в Linode Cloud. Получите сервер за несколько секунд с выбранным вами Linux дистрибутивом, ресурсами и размещением узлов. <a href=':1:'>Подробнее</a>",
        'hosting_digital_ocean_title'     => 'Digital Ocean',
        'hosting_digital_ocean_1'         => "Молниеносно быстрые облачные технологии. Созданы для разработчиков. Развертывание сервера на SSD в облако за 55 секунд. <a href=':1:'>Подробнее</a>",
        'hosting_digital_ocean_2'         => "<p>Follow this <a href=':1:'>tutorial</a> to get started</p>",
        'hosting_rackspace_title'         => "Rackspace",
        'hosting_rackspace_1'             => "Облачные серверы представляют собой виртуальные машины, работающие под управлением Linux или Windows&reg; Server в Rackspace Cloud. В зависимости от ваших потребностей вы можете масштабировать ресурсы, такие как процессор, память и размер диска, изменяя их как в большую, так и в меньшую сторону. Вы оплачиваете только те ресурсы, которые вам необходимо использовать. <a href=':1:'>Подробнее</a>",
        'hosting_install_instructions'    => 'Установите Phalcon, используя стандартную инструкцию.',
        'hosting_azure_title'             => "Windows Azure",
        'hosting_azure_1'                 => "Облако <a href=':1:'>Windows Azure</a> представляет собой масштабируемый и управляемый хостинг на OS Windows для ваших приложений. Используя Phalcon можно сократить необходимое количество экземпляров/инстансов.",
        'hosting_azure_2'                 => "Для установки Phalcon выполните пошаговые инструкции, указанные в <a href=':1:'>этой статье на SitePoint</a>",
        'hosting_aspnix_1'                => 'ASPnix provides superior Windows web hosting services. Our customers have rated our service as outstanding. We offer economical plans for shared Windows web hosting, Virtual private servers and dedicated servers!  <a href=":1:">See more</a>',
        'hosting_aspnix_2'                => '<p>Phalcon is supported on all Windows shared web hosting packages and plans, no configuration or installation required! They offer a variety of PHP versions from 5.2 – 5.6 as well as many <a href=":1:" target="_blank">additional extensions</a>!</p>',
        'hosting_layershift_title'        => 'Layershift',
        'hosting_layershift_1'            => "You bring the code, we'll sort the servers. Next generation, auto-sizing PaaS for PHP",
        'hosting_layershift_2'            => "<p>Follow this <a href=':1'>tutorial</a> to get started</p>",

        'testimonials'                    => 'Отзывы',
        'testimonials_description'        => "Ниже опубликованы отзывы и результаты использования Phalcon, которые мы получили от вас, разработчиков и пользователей Phalcon PHP. Мы всегда рады письмам с вашими отзывами и будем размещать их в нашем блоге. Если вы хотите прислать нам свои результаты или связаться с нами, не стесняйтесь, пишите нам по адресу <a href='mailto::1:'>:2:</a>.",
        'testimonials_1'                  => "Привет, команда Phalcon! У меня есть проект, построенный на фреймворке Phalcon. Это Guitarama (<a href=':1:'>:2:</a>) -  каталог нот и аккордов для гитары. Сайт ориентирован на русскую аудиторию и использует русский язык, но я надеюсь, что не будет никаких проблем с пониманием содержания большинства страниц. Сайт был вновь запущен на новой платформе в начале января 2013 года и с тех пор показывает устойчивый рост. Ежедневная статистика на данный момент: ~ 1500 уникальных посетителей, ~ 5000 просмотров страниц. Сайт работает на старом сервере 1хP4-3Ghz, 4 Гб оперативной памяти. Еще раз благодарю Вас за отличный фреймворк и все, что вы делаете :) Michael.",
        'testimonials_2'                  => "Привет, команда Phalcon. Я хотел бы поделиться нашими результатами использования Phalcon в проектах <a href=':1:'>:2:</a> and <a href=':3:'>:4:</a>, наиболее посещаемых и высоконагруженных сайтах в Казахстане, которые входят в TOP-10 рейтинговых каталогов СНГ. Оба сайта работают на RESTful-like API, написанном на Phalcon\Mvc\Micro. При пиковых нагрузках API обрабатывает около 400 req/sec, и это не предел. Переход на Phalcon позволил нам сократить время ответа и использования CPU и RAM, а также сократить сроки разработки. Мы продолжим использовать Phalcon в наших новых проектах. Спасибо за большую работу, которую вы делаете. С уважением, Никита Вершинин, ведущий разработчик, Kolesa.kz и krisha.kz",
        'testimonials_3'                  => "Команда Phalcon, фреймворк, который вы, ребята, создали - удивителен. Я никогда ранее не использовал фреймворк, который объединил в себе скорость, эффективность, краткость и естественность. Я хотел бы содействовать развитию проекта любым возможным способом. Я недавно начал работу над ~800 часовым проектом и я рад сообщить, что мы используем Phalcon Framework. Браво. Брайан Сеймур",
        'testimonials_4'                  => "Привет, ребята, я просто ознакомился с Phalcon, и это просто потрясающе! Я всего лишь хотел сказать вам, какие вы молодцы! Так что, спасибо за этот фреймворк и продолжайте в том же духе! Ivan Penchev",
        'testimonials_5'                  => "Привет, ребята, я написал простой URL-Shortener, использующий Phalcon. Это было удивительно! На самом деле. <a href=':1:'>:2:</a>. Демо здесь  <a href=':3:'>:4:</a> :) Murat Küçükosman",
        'testimonials_6'                  => "Hello Phalcon Team, I created a small project designed for Polish users using your framework. I have to admit that the performance is amazing, congratulations good job. Service to validate the content of the web pages in Polish language <a href=':1:'></a>:2:</a>",
        'testimonials_7'                  => "Hi guys! Just wanted to share with you the latest release of our old project - <a href=':1:'>:2:</a>. Switching to phalcon allowed us to halve the server load compared to the previous framework, which is great!",

        'support_note'                    => "Часто причиной ошибок является использование не актуальной версии. Пожалуйста, перейдите на страницу :1:, скачайте последнюю доступную версию (или соберите её) и убедитесь, что проблема, с которой вы столкнулись, действительно является ошибкой.",
        'support_download_page'           => "скачать",
        'support_documentation_1'         => "Пожалуйста, изучите раздел :1: прежде, чем предпринять дальнейшие шаги. Вы также можете воспользоваться поиском, чтобы найти интересующую информацию. Если вы всё же не получили ответ на ваш вопрос, воспользуйтесь ресурсами, перечисленными ниже.",
        'support_phalcon_forum'           => "Форум Phalcon",
        'support_forum_1'                 => "Вы можете задать вопрос на нашем <a href=':1:'>форуме</a>",
        'support_irc'                     => "IRC канал",
        'support_irc_1'                   => "Вы можете найти нас на канале :1: сети Freenode.",
        'support_stack_overflow_1'        => "Если вы знакомы с Stack Overflow или предпочитаете пользоваться этим ресурсом, существует тэг <a href=':1:'>phalcon</a>, который вы можете использовать для поиска или для того, чтобы отмечать свои вопросы.",
        'support_please_note'             => "Пожалуйста, обратите внимание на следующие моменты:",
        'support_please_note_1'           => "Stack Overflow не является ресурсом, который используется только для поддержки Phalcon",
        'support_please_note_2'           => "Пожалуйста, не создавайте там сообщений об ошибках. Используйте <a href=':1:'>issue tracker</a> на Github для этих целей",
        'support_please_note_3'           => "Пожалуйста, не создавайте там запросы о новом функционале. Используйте <a href=':1:'>issue tracker</a> на Github для этих целей",
        'support_please_note_4'           => "Убедитесь, что вы отметили тэгом 'phalcon' ваш вопрос",
        'support_please_note_5'           => "Убедитесь, что вы упоминаете слово 'Phalcon' в вопросе",
        'support_reporting_a_bug'         => "Сообщение об ошибке",
        'support_reporting_a_bug_1'       => "Пожалуйста, сообщайте об ошибках, когда вы испробовали все из вышеперечисленных вариантов, используя <a href=':1:'>issue tracker</а> на Github.",


    );

    // return $messages;