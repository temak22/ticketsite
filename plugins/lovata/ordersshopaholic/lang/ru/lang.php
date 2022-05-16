<?php return [
    'plugin'               => [
        'name'        => 'Orders for Shopaholic',
        'description' => 'Корзина и оформление заказа',
    ],
    'component'            => [
        'cart_name'                       => 'Корзина',
        'cart_description'                => '',
        'make_order_name'                 => 'Создание заказа',
        'make_order_description'          => 'Создание нового заказа',
        'payment_method_list_name'        => 'Методы оплаты',
        'payment_method_list_description' => '',
        'shipping_type_list_name'         => 'Способы доставки',
        'shipping_type_list_description'  => '',
        'status_list_name'                => 'Статусы заказа',
        'status_list_description'         => '',
        'order_page_name'                 => 'Страница заказа',
        'order_page_description'          => '',
        'send_payment_purchase'           => 'Отправить запрос в платежную систему после создания заказа',
        'user_address_name'               => 'Адреса пользователя',
        'user_address_description'        => 'Создание/редактирование/удаление',
    ],
    'tab'                  => [
        'info'                       => 'Данные заказа',
        'offers_info'                => 'Список товаров',
        'order_settings'             => 'Корзина и заказы',
        'gateway'                    => 'Платежная система',
        'payment_data'               => 'Данные платежа',
        'discount_info'              => 'Информация о скидках',
        'billing_address'            => 'Адрес оплаты',
        'shipping_address'           => 'Адрес доставки',
        'tasks'                      => 'Задачи',
        'shipping_restrictions_info' => 'Ограничения',
        'payment_restrictions_info'  => 'Ограничения',
    ],
    'message'              => [
        'empty_cart'           => 'Корзина пуста',
        'offer_not_found'      => 'Товар не найден',
        'insufficient_amount'  => 'Товара нет в наличии',
        'order_id_required'    => 'Связь между позицией заказа и заказом обязательна',
        'cart_id_required'     => 'Связь между позицией корзины и корзиной обязательна',
        'item_required'        => 'Связь между позицией и элементом обязательна',
        'without_condition'    => 'Без условий',
        'discount_not_applied' => 'Скидки не применялись',
        'e_address_exists'     => 'Такой адрес уже существует',
    ],
    'field'                => [
        'status'       => 'Статус',
        'order_number' => 'Номер заказа',
        'user'         => 'Покупатель',

        'new'         => 'Новый',
        'canceled'    => 'Отменен',
        'complete'    => 'Завершен',
        'in_progress' => 'Выполняется',

        'total_price'                    => 'Сумма заказа',
        'old_total_price'                => 'Сумма заказа без скидок',
        'position_price'                 => 'Стоимость позиции',
        'old_position_price'             => 'Стоимость позиции без скидок',
        'shipping_price'                 => 'Стоимость доставки',
        'catalog_price'                  => 'Текущая цена',
        'offer_list'                     => 'Список товаров в заказе',
        'position_total_price'           => 'Стоимость позиций заказа',
        'shipping_type'                  => 'Способ доставки',
        'payment_method'                 => 'Способ оплаты',
        'is_user_show'                   => 'Показывать статус пользователю',
        'user_status'                    => 'Для пользователя статус будет показан как',
        'color'                          => 'Цвет',
        'gateway_id'                     => 'Платежная система',
        'gateway_currency'               => 'Валюта платежной системы',
        'before_status_id'               => 'Статус заказа до оплаты',
        'after_status_id'                => 'Статус заказа после оплаты',
        'cancel_status_id'               => 'Статус заказа после отмены оплаты',
        'fail_status_id'                 => 'Статус заказа после ошибки оплаты',
        'transaction_id'                 => 'Transaction ID',
        'payment_token'                  => 'Payment token',
        'payment_data'                   => 'Данные, отправленные платежному шлюзу',
        'payment_response'               => 'Данные, полученные из платежного шлюза',
        'send_purchase_request'          => 'Отправлять запрос в платежный шлюз при создании заказа',
        'restore_cart'                   => 'Восстанавливать позиции заказа, если оплата была отменена или не удалась',
        'gateway_field_value'            => 'Получить значение свойства ":field" из значения свойства заказа',
        'promo_mechanism'                => 'Промо-механизм',
        'priority_description'           => 'Скидка с более <strong>высоким</strong> приоритетом будет применена <strong>раньше</strong>.',
        'discount_value'                 => 'Значение скидки',
        'discount_type'                  => 'Тип скидки',
        'discount_type_fixed'            => 'Фиксированное значение',
        'discount_type_percent'          => 'В процентах',
        'final_discount'                 => 'Окончательная скидка',
        'final_discount_description'     => 'Окончательная скидка блокирует влияние других скидок с более низким приоритетом. В противном случае будут применяться скидки с более низким приоритетом.',
        'order_discount_list'            => 'Список доступных скидок',
        'manager'                        => 'Менеджер',
        'task_date'                      => 'Дата уведомления',
        'active_task'                    => 'Активные задачи',
        'completed_task'                 => 'Завершенные задачи',
        'task_mail_template'             => 'Шаблон письма для уведомления',
        'task_mail_template_description' => 'Если шаблон письма не выбран, то письмо с уведомление не будет отправлено',
        'notification_sent'              => 'Уведомление отправлено',
        'applied_to_shipping_price'      => 'Применять к стоймости доставки',
        'restriction'                    => 'Ограничение',
        'shipping_type_api_class'        => 'API метод',

        'order_discount_log_position_total_price' => 'Список примененных скидок (для суммы позиций заказов)',
        'order_discount_log_sipping_price'        => 'Список примененных скидок (для стомости доставки)',
        'order_discount_log_total_price'          => 'Список примененных скидок (для общей суммы заказа)',

        'name'        => 'Имя',
        'last_name'   => 'Фамилия',
        'middle_name' => 'Отчество',
    ],
    'settings'             => [
        'cart_cookie_lifetime'                 => 'Время жизни ID корзины в cookie (мин.)',
        'check_offer_quantity'                 => 'Проверять доступное количество товара при создании заказа',
        'decrement_offer_quantity'             => 'Автоматически уменьшать доступное количетсво товара при создании заказа',
        'create_new_user'                      => 'Автоматически создавать нового пользователя при создании заказа',
        'generate_fake_email'                  => 'При создании нового пользователя, сгенерировать произвольный email, если поле email не заполнено',
        'send_email_after_creating_order'      => 'Отправлять письма, после создания заказа',
        'creating_order_mail_template'         => 'Шаблон письма создания заказа (для пользователя)',
        'creating_order_manager_mail_template' => 'Шаблон письма создания заказа (для менеджеров)',
        'creating_order_manager_email_list'    => 'Список email адресов менеджеров',

        'order_create_email' => 'Email для отправки уведомлений при создании заказа',
    ],
    'menu'                 => [
        'orders'                              => 'Заказы',
        'statuses'                            => 'Статусы',
        'statuses_description'                => 'Управление статусами заказов',
        'payment_methods'                     => 'Методы оплаты',
        'payment_methods_description'         => 'Управление методами оплаты',
        'shipping_types'                      => 'Способы доставки',
        'shipping_types_description'          => 'Управление cпоcобами доставки',
        'order_property'                      => 'Дополнительные свойства заказа',
        'order_property_description'          => 'Управление дополнительными свойствами заказа',
        'order_position_property'             => 'Дополнительные свойства позиции заказа',
        'order_position_property_description' => 'Управление дополнительными свойствами позиции заказа',
        'promo_mechanism'                     => 'Промо-механизм',
    ],
    'order'                => [
        'name'       => 'заказа',
        'list_title' => 'Список заказов',
    ],
    'buyer'                => [
        'name'       => 'покупателя',
        'list_title' => 'Список покупателей',
    ],
    'order_position'       => [
        'name'       => 'позиции заказа',
        'list_title' => 'Список позиций заказа',
    ],
    'status'               => [
        'name'       => 'статуса',
        'list_title' => 'Список статусов',
    ],
    'payment_method'       => [
        'name'       => 'метода оплаты',
        'list_title' => 'Методы оплаты',
    ],
    'shipping_type'        => [
        'name'       => 'способа доставки',
        'list_title' => 'Способы доставки',
    ],
    'order_property'       => [
        'name'       => 'свойства',
        'list_title' => 'Список свойств',
    ],
    'task'                 => [
        'name'       => 'задачи',
        'list_title' => 'Список задач',
    ],
    'promo_mechanism'      => [
        'name'                            => 'промо-механизма',
        'list_title'                      => 'Список промо-механизмов',
        'amount_description'              => 'Скидка будет применена, если сумма будет больше чем указанное значение.',
        'offer_limit'                     => 'Количество едениц товара, которое будет давать скидку.',
        'offer_limit_description'         => 'Скидка будет применена, если количество едениц товара будет больше чем указанное значение.',
        'position_limit'                  => 'Количество позиций заказа, которое будет давать скидку.',
        'position_limit_description'      => 'Скидка будет применена, если количество позиций заказа будет больше чем указанное значение.',
        'quantity_limit'                  => 'Количество, на которе будет применена скидка',
        'quantity_limit_description'      => 'Если указано значение = 1 и значение скидки = 100%, то скидка будет применена на одну единицу. Если указано значение = 0, то скидка будет применена на все еденицы.',
        'quantity_limit_from'             => 'Количество, при котором скидка будет повторяться',
        'quantity_limit_from_description' => 'Если указано значение = 3, количество, на которе будет применена скидка = 1 и значение скидки = 100%, то скидка будет применена на одну единицу и будет повторяться каждые 3 товара (3 по цене 2-ух). Если указано значение = 0, то значение не учитывается.',
    ],
    'restriction'          => [
        'name'       => 'ограничения',
        'list_title' => 'Список ограничений',
        'property'   => [
            'price_min' => 'Минимальная цена',
            'price_max' => 'Максимальная цена',
        ],
        'handler'    => [
            'by_total_price'    => 'По общей сумме позиций заказа',
            'by_shipping_type'  => 'По способу доставки',
            'by_payment_method' => 'По способу оплаты',
        ],
    ],
    'permission'           => [
        'order'           => 'Управление заказами',
        'status'          => 'Управление статусами заказа',
        'payment_type'    => 'Управление методами оплаты',
        'delivery_type'   => 'Управление типами доставки',
        'property'        => 'Управление свойствами заказов',
        'promo_mechanism' => 'Управление промо-механизмами',
    ],
    'label'                => [
        'order'   => 'Заказ',
        'product' => 'Товар',
        'offer'   => 'Товарное предложение',
    ],
    'promo_mechanism_type' => [
        'without_condition_discount_position'                         => 'Скидка на цену позиции заказа, без проверки условий',
        'without_condition_discount_position_description'             => 'Скидка на цену <strong>позиции заказа</strong> будет применена <strong>без проверки каких-либо условий</strong>. Например: может использоваться, если применен купон.',
        'without_condition_discount_min_price'                        => 'Скидка на цену позиции с минимальной ценой, без проверки условий',
        'without_condition_discount_min_price_description'            => 'Скидка на цену <strong>позиции с минимальной ценой</strong> будет применена <strong>без проверки каких-либо условий</strong>. Например: может использоваться, если применен купон.',
        'without_condition_discount_position_total_price'             => 'Скидка на сумму позиций заказа, без проверки условий',
        'without_condition_discount_position_total_price_description' => 'Скидка на <strong>сумму позиций</strong> заказа будет применена <strong>без проверки каких-либо условий</strong>. Например: может использоваться, если применен купон.',
        'without_condition_discount_shipping_price'                   => 'Скидка на цену доставки, без проверки условий',
        'without_condition_discount_shipping_price_description'       => 'Скидка на <strong>цену доставки</strong> будет применена <strong>без проверки каких-либо условий</strong>. Например: может использоваться, если применен купон.',
        'without_condition_discount_total_price'                      => 'Скидка на общую сумму заказа, без проверки условий',
        'without_condition_discount_total_price_description'          => 'Скидка на <strong>общую сумму</strong> заказа будет применена <strong>без проверки каких-либо условий</strong>. Например: может использоваться, если применен купон.',

        'position_total_price_greater_discount_shipping_price'             => 'Скидка на цену доставки, если сумма позиций заказа больше чем',
        'position_total_price_greater_discount_shipping_price_description' => 'Скидка на <strong>цену доставки</strong> будет применена <strong>, если сумма позиций заказа больше чем указанное значение</strong>. Например: скидка 5%, если сумма позиций заказа >= 50$.',
        'position_total_price_greater_discount_total_price'                => 'Скидка на общую сумму заказа, если сумма позиций заказа больше чем',
        'position_total_price_greater_discount_total_price_description'    => 'Скидка на <strong>общую сумму</strong> заказа будет применена <strong>, если сумма позиций заказа больше чем указанное значение</strong>. Например: скидка 5%, если сумма позиций заказа >= 50$.',

        'offer_quantity_greater_discount_position'                         => 'Скидка на цену позиции заказа, если количество одной позиции заказа больше чем',
        'offer_quantity_greater_discount_position_description'             => 'Скидка на цену <strong>позиции заказа</strong> будет применена <strong>, если количество одной позиции заказа больше чем указанное значение</strong>. Например: скидка 5%, если количество позиции "Майка 52-го размера" в заказе >= 3.',
        'offer_quantity_greater_discount_min_price'                        => 'Скидка на цену позиции с минимальной ценой, если количество одной позиции заказа больше чем',
        'offer_quantity_greater_discount_min_price_description'            => 'Скидка на цену <strong>позиции с минимальной ценой</strong> будет применена <strong>, если количество одной позиции заказа больше чем указанное значение</strong>. Например: скидка 5%, если количество позиции "Майка 52-го размера" в заказе >= 3.',
        'offer_quantity_greater_discount_position_total_price'             => 'Скидка на сумму позиций заказа, если количество одной позиции заказа больше чем',
        'offer_quantity_greater_discount_position_total_price_description' => 'Скидка на <strong>сумму позиций</strong> заказа будет применена <strong>, если количество одной позиции заказа больше чем указанное значение</strong>. Например: скидка 5%, если количество позиции "Майка 52-го размера" в заказе >= 3.',
        'offer_quantity_greater_discount_shipping_price'                   => 'Скидка на цену доставки, если количество одной позиции заказа больше чем',
        'offer_quantity_greater_discount_shipping_price_description'       => 'Скидка на <strong>цену доставки</strong> будет применена <strong>, если количество одной позиции заказа больше чем указанное значение</strong>. Например: скидка 5%, если количество позиции "Майка 52-го размера" в заказе >= 3.',
        'offer_quantity_greater_discount_total_price'                      => 'Скидка на общую сумму заказа, если количество одной позиции заказа больше чем',
        'offer_quantity_greater_discount_total_price_description'          => 'Скидка на <strong>общую сумму</strong> заказа будет применена <strong>, если количество одной позиции заказа больше чем указанное значение</strong>. Например: скидка 5%, если количество позиции "Майка 52-го размера" в заказе >= 3.',

        'offer_total_quantity_greater_discount_position'                         => 'Скидка на цену позиции заказа, если общее количетсво единиц в заказе больше чем',
        'offer_total_quantity_greater_discount_position_description'             => 'Скидка на цену <strong>позиции заказа</strong> будет применена <strong>, если общее количетсво единиц в заказе больше чем указанное значение</strong>. Например: скидка 5%, если общее количетсво единиц "Майка 52-размера" (количетво = 2) + "Майка 56-го размера" (количетво = 2) = 4 >= 3.',
        'offer_total_quantity_greater_discount_min_price'                        => 'Скидка на цену позиции с минимальной ценой, если общее количетсво единиц в заказе больше чем',
        'offer_total_quantity_greater_discount_min_price_description'            => 'Скидка на цену <strong>позиции с минимальной ценой</strong> будет применена <strong>, если общее количетсво единиц в заказе больше чем указанное значение</strong>. Например: скидка 5%, если общее количетсво единиц "Майка 52-размера" (количетво = 2) + "Майка 56-го размера" (количетво = 2) = 4 >= 3.',
        'offer_total_quantity_greater_discount_position_total_price'             => 'Скидка на сумму позиций заказа, если общее количетсво единиц в заказе больше чем',
        'offer_total_quantity_greater_discount_position_total_price_description' => 'Скидка на <strong>сумму позиций</strong> заказа будет применена <strong>, если общее количетсво единиц в заказе больше чем указанное значение</strong>. Например: скидка 5%, если общее количетсво единиц "Майка 52-размера" (количетво = 2) + "Майка 56-го размера" (количетво = 2) = 4 >= 3.',
        'offer_total_quantity_greater_discount_shipping_price'                   => 'Скидка на цену доставки, если общее количетсво единиц в заказе больше чем',
        'offer_total_quantity_greater_discount_shipping_price_description'       => 'Скидка на <strong>цену доставки</strong> будет применена <strong>, если общее количетсво единиц в заказе больше чем указанное значение</strong>. Например: скидка 5%, если общее количетсво единиц "Майка 52-размера" (количетво = 2) + "Майка 56-го размера" (количетво = 2) = 4 >= 3.',
        'offer_total_quantity_greater_discount_total_price'                      => 'Скидка на общую сумму заказа, если общее количетсво единиц в заказе больше чем',
        'offer_total_quantity_greater_discount_total_price_description'          => 'Скидка на <strong>общую сумму</strong> заказа будет применена <strong>, если общее количетсво единиц в заказе больше чем указанное значение</strong>. Например: скидка 5%, если общее количетсво единиц "Майка 52-размера" (количетво = 2) + "Майка 56-го размера" (количетво = 2) = 4 >= 3.',

        'position_count_greater_discount_position'                         => 'Скидка на цену позиции заказа, если количество позиций в заказе больше чем',
        'position_count_greater_discount_position_description'             => 'Скидка на цену <strong>позиции заказа</strong> будет применена <strong>, если количество позиций в заказе больше чем указанное значение</strong>. Например: скидка 5%, если количество позиций в заказе >= 3.',
        'position_count_greater_discount_min_price'                        => 'Скидка на цену позиции с минимальной ценой, если количество позиций в заказе больше чем',
        'position_count_greater_discount_min_price_description'            => 'Скидка на цену <strong>позиции с минимальной ценой</strong> будет применена <strong>, если количество позиций в заказе больше чем указанное значение</strong>. Например: скидка 5%, если количество позиций в заказе >= 3.',
        'position_count_greater_discount_position_total_price'             => 'Скидка на сумму позиций заказа, если количество позиций в заказе больше чем',
        'position_count_greater_discount_position_total_price_description' => 'Скидка на <strong>сумму позиций</strong> заказа будет применена <strong>, если количество позиций в заказе больше чем указанное значение</strong>. Например: скидка 5%, если количество позиций в заказе >= 3.',
        'position_count_greater_discount_shipping_price'                   => 'Скидка на цену доставки, если количество позиций в заказе больше чем',
        'position_count_greater_discount_shipping_price_description'       => 'Скидка на <strong>цену доставки</strong> будет применена <strong>, если количество позиций в заказе больше чем указанное значение</strong>. Например: скидка 5%, если количество позиций в заказе >= 3.',
        'position_count_greater_discount_total_price'                      => 'Скидка на общую сумму заказа, если количество позиций в заказе больше чем',
        'position_count_greater_discount_total_price_description'          => 'Скидка на <strong>общую сумму</strong> заказа будет применена <strong>, если количество позиций в заказе больше чем указанное значение</strong>. Например: скидка 5%, если количество позиций в заказе >= 3.',
    ],
];