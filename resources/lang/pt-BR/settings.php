<?php

return [

    'company' => [
        'name'              => 'Nome',
        'email'             => 'E-mail',
        'phone'             => 'Telefone',
        'address'           => 'Endereço',
        'logo'              => 'Logo',
    ],
    'localisation' => [
        'tab'               => 'Localizção',
        'date' => [
            'format'        => 'Formato da Data',
            'separator'     => 'Separador de Data',
            'dash'          => 'Traço (-)',
            'dot'           => 'Ponto (.)',
            'comma'         => 'Vírgula (,)',
            'slash'         => 'Barra (/)',
            'space'         => 'Espaço ( )',
        ],
        'timezone'          => 'Fuso Horário',
    ],
    'invoice' => [
        'tab'               => 'Faturas',
        'prefix'            => 'Number Prefix',
        'digit'             => 'Number Digit',
        'next'              => 'Next Number',
        'logo'              => 'Logo',
    ],
    'default' => [
        'tab'               => 'Padrões',
        'account'           => 'Conta Padrão',
        'currency'          => 'Moeda Padrão',
        'tax'               => 'Imposto Padrão',
        'payment'           => 'Metodo de pagamento padrão',
        'language'          => 'Idioma Padrão',
    ],
    'email' => [
        'protocol'          => 'Protocolo',
        'php'               => 'PHP Mail',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP Host',
            'port'          => 'SMTP Porta',
            'username'      => 'SMTP Usuário',
            'password'      => 'SMTP Senha',
            'encryption'    => 'SMTP Criptografia',
            'none'          => 'Nenhum',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Sendmail Path',
        'log'               => 'Log Emails',
    ],
    'scheduling' => [
        'tab'               => 'Agendamento',
        'send_invoice'      => 'Enviar lembrete de faturas',
        'invoice_days'      => 'Enviar após dias de vencimento',
        'send_bill'         => 'Enviar lembrança',
        'bill_days'         => 'Enviar antes de vencer',
        'cron_command'      => 'Comando Cron',
        'schedule_time'     => 'Iniciar Cron',
    ],
    'appearance' => [
        'tab'               => 'Aparência',
        'theme'             => 'Tema',
        'light'             => 'Claro',
        'dark'              => 'Escuro',
        'list_limit'        => 'Registros por Página',
        'use_gravatar'      => 'Usar Gravatar',
    ],
    'system' => [
        'tab'               => 'Sistema',
        'session' => [
            'lifetime'      => 'Finalizar sessão (Minutos)',
            'handler'       => 'Manipulador de sessão',
            'file'          => 'Arquivo',
            'database'      => 'Database',
        ],
        'file_size'         => 'Tamanho máximo do arquivo (MB)',
        'file_types'        => 'Tipos de arquivos permitidos',
    ],

];
