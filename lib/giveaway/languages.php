<?php

$localization = ['languages' => [
    'en' => 'English',
    'it' => 'Italian'
    ]
];

$localization['en'] = [
    'Welcome_Msg' => "Welcome to GiveawayBot.\nTo start choose a language.",
    'Menu_Msg' => 'GiveawayBot let you create and join giveaway without leaving Telegram.
To start press one of the following buttons or click /help to get help.',
    'Register_Msg' => 'Now you start the creation of a giveaway. select one of the type below.
<code>JoinIn</code>: everyone that join your giveaway will have the same winning possibility.
<code>ShareIt</code>: share is the way; users will gain winning possibilities by sharing it.',
    'EnteringTitle_Msg' => 'Enter the giveaway title.',
    'EnteringHashtag_Msg' => 'Enter the hashtag for this giveaway or skip. A giveaway with a hashtag can be joined by giving command <code>/show #hashtag</code>.',
    'EnteringDescription_Msg' => 'Enter a description for the giveaway.',
    'EnteringMaxPartecipants_Msg' => 'Enter the max number of partecipants allowed to join or let unlimited users join by pressing the button below',
    'EnteringDate_Msg' => 'Enter how many days will the giveaway last.
(Enter a number between 3-40)',
    'EnteringPrizeName_Msg' => 'Enter the name of the prize.',
    'EnteringPrizeValue_Msg' => 'Enter how much this prize worth in the form 29.99€. You can use your own currency, if it is not valid i\'ll let it choose it from a list.',
    'EnteringPrizeType_Msg' => 'Please select the type for this prize by pressing in one of the buttos below.',
    'EnteringPrizeCurrency_Msg' => 'Please select the currency of the value by pressing one of the buttons below',
    'EnteringPrizeKey_Msg' => 'Enter the key for this prize. You cannot modify the key after entering it, so please pay attenction.
This Key will be sent to the winner when the giveaway will end.
It is securely stored on a database.',
    'EditTitle_Msg' => 'Enter the new <b>title</b>.',
    'EditHashtag_Msg' => 'Enter the new <b>hashtag</b>.',
    'EditDescription_Msg' => 'Enter the new <b>description</b>.',
    'EditDate_Msg' => 'Enter the new date when the giveaway will end.
(Enter a number between 3-40)',
    'Title_Msg' => '<b>Title: </b>',
    'Hashatag_Msg' => '<b>Hashtag: </b>',
    'MaxPartecipants_Msg' => '<b>Max partecipants allowed: </b>',
    'Description_Msg' => '<b>Description: </b>',
    'Date_Msg' => '<b>Date: </b>',
    'NewTitle_Msg' => '<b>New title: </b>',
    'NewHashtag_Msg' => '<b>New hashtag: </b>',
    'NewDescription_Msg' => '<b>New description: </b>',
    'NewDate_Msg' => '<b>New date: </b>',
    'PrizeName_Msg' => '<b>Prize name: </b>',
    'PrizeValue_Msg' => '<b>Value: </b>',
    'ValueNoCurrency_Msg' => '<b>Incomplete value: </b>',
    'PrizeKey_Msg' => '<b>Key: </b>',
    'PrizeType_Msg' => '<b>Type: </b>',
    'NewValue_Msg' => '<b>New value: </b>',
    'NewValueNoCurrency_Msg' => '<b>New incomplete value: </b>',
    'EditPrizeCurrency_Msg' => '<b>New value: </b>',
    'TitleLenght_Msg' => 'The title you inserted is too short. Please insert a new one longer than 5 characters.',
    'ValidHashtag_Msg' => 'The hashtag inserted is not valid, please re-insert it.',
    'DuplicatedHashtag_Msg' => 'The hashtag you entered is already used, please enter a new one.',
    'HashtagSkipped_Msg' => '<b>Hashtag:</b> <i>Skipped</i>.',
    'DescriptionSkipped_Msg' => '<b>Description:</b> <i>no description</i>.',
    'MaxPartecipantsNotValid_Msg' => 'The number of partecipants allowed is not valid. Please insert a new one.',
    'MaxPartecipantsInfinite_Msg' => '<b>Max partecipants:</b> <i>no limit</i>.',
    'DateNotValid_Msg' => 'The date inserted is not valid, please insert a number between 3-40 that represent the days the giveaway will last.',
    'ValueNotValid_Msg' => 'Please insert a valid value.',
    'NewValueNotValid_Msg' => 'The new value is not valid, please insert a new one.',
    'ShowHashtagMissing_Msg' => 'You should specify the giveaway\'s hashtag:',
    'ClosedGiveawayWarn_Msg' => '<b>The requested giveaway is closed.</b>',
    'NoGiveawayWarn_Msg' => '<b>Giveaway not found</b>',
    'MaxParticipants_Msg' => 'Sorry but the giveaway has reached the the maximum number of participants.',
    'JoinedSuccess_Msg' => 'You joined this giveaway!',
    'CancelSuccess_Msg' => 'You refused the giveaway  ¯\_(ツ)_/¯',
    'MissingHashtagWarn_Msg' => 'You should specify an hashtag:',
    'StatsEmpty_Msg' => 'Sorry, you didn\'t join giveaways',
    'Value_Msg' => 'For a value of ',
    'Owned_Msg' => '<code>Owned</code>',
    'Joined_Msg' => '<code>Joined</code>',
    'Closed_Msg' => '<code>Closed</code>',
    'LastDay_Msg' => '<code>Last day</code>',
    'Days_Msg' => 'days',
    'Menu_Button' => 'Menu',
    'Register_Button' => 'Create',
    'Show_Button' => 'Browse',
    'Options_Button' => 'Options',
    'standard_Button' => 'JoinIn',
    'cumulative_Button' => 'ShareIt',
    'Back_Button' => 'Back',
    'Skip_Button' => 'Skip',
    'Confirm_Button' => 'Confirm',
    'Infinite_Button' => 'No limit',
    'EditTitle_Button' => 'Edit title',
    'EditHashtag_Button' => 'Edit hashtag',
    'EditMaxPartecipants_Button' => 'Edit partecipants',
    'EditDescription_Button' => 'Edit description',
    'EditDate_Button' => 'Edit date',
    'DeleteHashtag_Button' => 'Delete hashtag',
    'DeleteDescription_Button' => 'Delete description',
    'AddHashtag_Button' => 'Add hashtag',
    'AddDescription_Button' => 'Add description',
    'AddMaxPartecipants_Button' => 'Add partecipants limit',
    'ConfirmGiveaway_Button' => 'Confirm',
    'ConfirmPrizes_Button' => 'Confirm prizes',
    'AddPrize_Button' => 'Add prize',
    'CancelGiveaway_Button' => 'Cancel giveaway',
    'EditPrizeName_Button' => 'Edit name',
    'EditPrizeType_Button' => 'Edit type',
    'EditPrizeValue_Button' => 'Edit value',
    'EditPrizeCurrency_Button' => 'Edit currency',
    'DeletePrize_Button' => 'Delete',
    'Prizes_Button' => 'All prizes',
    'Type0_Button' => 'Videogame key',
    'Type1_Button' => 'Coupon',
    'Type2_Button' => 'Gift Card',
    'Type3_Button' => 'Other',
    'Join_Button' => 'Join',
    'Cancel_Button' => 'Cancel',
    'standard_AnswerCallback' => 'JoinIn',
    'cumulative_AnswerCallback' => 'ShareIt',
    'HashtagSkipped_AnswerCallback' => 'Hashtag skipped',
    'DescriptionSkippet_AnswerCallback' => 'No description',
    'MaxPartecipantsInfinite_AnswerCallback' => 'No limit',
    '€_AnswerCallback' => 'Euro',
    '$_AnswerCallback' => 'Dollar',
];

$localization['it'] = [
    'UserRegistred_AnswerCallback' => 'Registrato',
    'Menu_Msg' => 'GiveawayBot ti permette di creare e parteciapre a giveaway senza uscire da Telegram.
Per iniziare premi uno dei seguenti pulsanti oppure /help per ricevere aiuto.',
    'Register_Button' => 'Crea',
    'Show_Button' => 'Sfoglia',
    'Options_Button' => 'Opzioni',
    'ShowHashtagMissing_Msg' => 'Devi specificare l\'hashtag del giveaway:',
    'Owned_Msg' => 'Creato',
    'Joined_Msg' => 'Partecipo',
    'Closed_Msg' => 'Chiuso',
    'Back_Button' => 'Indietro',
    'LastDay_Msg' => 'Ultimo giorno',
    'Days_Msg' => 'giorni',
    'ClosedGiveaway_Msg' => '<b>Il giveaway richiesto è chiuso.</b>',
    'NoGiveawayWarn_Msg' => '<b>Giveaway non trovato</b>',
    'Join_Button' => 'Partecipa',
    'Cancel_Button' => 'Annulla',
    'MaxParticipants_Msg' => 'Il giveaway ha raggiunto il numero massimo di partecipanti, impossible partecipare.',
    'JoinedSuccess_Msg' => 'Hai preso parte a questo giveaway! ',
    'CancelSuccess_Msg' => 'Hai deciso di non partecipare ¯\_(ツ)_/¯',
    'MissingHashtagWarn_Msg' => 'Devi specificare un hashtag:',
    'StatsEmpty_Msg' => 'Non stai partecipando a nessun giveaway',
    'Value_Msg' => 'Per un valore di '
];

