<?php

namespace Database\Seeders;

use Modules\Feeder\App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::insert([
            array('id' => 'A', 'name' => 'United Arab Emirates'),
            array('id' => 'AD', 'name' => 'Andorra'),
            array('id' => 'AF', 'name' => 'Afghanistan'),
            array('id' => 'AG', 'name' => 'Antigua And Barbuda'),
            array('id' => 'AI', 'name' => 'Anguilla'),
            array('id' => 'AL', 'name' => 'Albania'),
            array('id' => 'AM', 'name' => 'Armenia'),
            array('id' => 'AN', 'name' => 'Netherlands Antilles'),
            array('id' => 'AO', 'name' => 'Angola'),
            array('id' => 'AQ', 'name' => 'Antarctica'),
            array('id' => 'AR', 'name' => 'Argentina'),
            array('id' => 'AS', 'name' => 'American Samoa'),
            array('id' => 'AT', 'name' => 'Austria'),
            array('id' => 'AU', 'name' => 'Australia'),
            array('id' => 'AW', 'name' => 'Aruba'),
            array('id' => 'AX', 'name' => 'Aland Islands'),
            array('id' => 'AZ', 'name' => 'Azerbaijan'),
            array('id' => 'B', 'name' => 'Belgium'),
            array('id' => 'BA', 'name' => 'Bosnia And Herzegovina'),
            array('id' => 'BB', 'name' => 'Barbados'),
            array('id' => 'BD', 'name' => 'Bangladesh'),
            array('id' => 'BF', 'name' => 'Burkina Faso'),
            array('id' => 'BG', 'name' => 'Bulgaria'),
            array('id' => 'BH', 'name' => 'Bahrain'),
            array('id' => 'BI', 'name' => 'Burundi'),
            array('id' => 'BJ', 'name' => 'Benin'),
            array('id' => 'BL', 'name' => 'Saint Bartelemey'),
            array('id' => 'BM', 'name' => 'Bermuda'),
            array('id' => 'BN', 'name' => 'Brunei Darussalam'),
            array('id' => 'BO', 'name' => 'Bolivia'),
            array('id' => 'BQ', 'name' => 'Bonaire, Saint Eustatius and Saba'),
            array('id' => 'BR', 'name' => 'Brazil'),
            array('id' => 'BS', 'name' => 'Bahamas'),
            array('id' => 'BT', 'name' => 'Bhutan'),
            array('id' => 'BV', 'name' => 'Bouvet Island'),
            array('id' => 'BW', 'name' => 'Botswana'),
            array('id' => 'BY', 'name' => 'Belarus'),
            array('id' => 'BZ', 'name' => 'Belize'),
            array('id' => 'CA', 'name' => 'Canada'),
            array('id' => 'CC', 'name' => 'Cocos (Keeling) Islands'),
            array('id' => 'CD', 'name' => 'Congo, The Democratic Republic Of The'),
            array('id' => 'CF', 'name' => 'Central African Republic'),
            array('id' => 'CG', 'name' => 'Congo'),
            array('id' => 'CH', 'name' => 'Switzerland'),
            array('id' => 'CI', 'name' => 'Cote D\'Ivoire'),
            array('id' => 'CK', 'name' => 'Cook Islands'),
            array('id' => 'CL', 'name' => 'Chile'),
            array('id' => 'CM', 'name' => 'Cameroon'),
            array('id' => 'CN', 'name' => 'China'),
            array('id' => 'CO', 'name' => 'Colombia'),
            array('id' => 'CR', 'name' => 'Costa Rica'),
            array('id' => 'CS', 'name' => 'Serbia And Montenegro'),
            array('id' => 'CU', 'name' => 'Cuba'),
            array('id' => 'CV', 'name' => 'Cape Verde'),
            array('id' => 'CW', 'name' => 'Curacao'),
            array('id' => 'CX', 'name' => 'Christmas Island'),
            array('id' => 'CY', 'name' => 'Cyprus'),
            array('id' => 'CZ', 'name' => 'Czech Republic'),
            array('id' => 'D', 'name' => 'Germany'),
            array('id' => 'DJ', 'name' => 'Djibouti'),
            array('id' => 'DK', 'name' => 'Denmark'),
            array('id' => 'DM', 'name' => 'Dominica'),
            array('id' => 'DO', 'name' => 'Dominican Republic'),
            array('id' => 'DZ', 'name' => 'Algeria'),
            array('id' => 'E', 'name' => 'Estonia'),
            array('id' => 'EC', 'name' => 'Ecuador'),
            array('id' => 'EG', 'name' => 'Egypt'),
            array('id' => 'EH', 'name' => 'Western Sahara'),
            array('id' => 'ER', 'name' => 'Eritrea'),
            array('id' => 'ES', 'name' => 'Spain'),
            array('id' => 'ET', 'name' => 'Ethiopia'),
            array('id' => 'FI', 'name' => 'Finland'),
            array('id' => 'FJ', 'name' => 'Fiji'),
            array('id' => 'FK', 'name' => 'Falkland Islands (Malvinas)'),
            array('id' => 'FM', 'name' => 'Micronesia, Federated States Of'),
            array('id' => 'FO', 'name' => 'Faroe Islands'),
            array('id' => 'FR', 'name' => 'France'),
            array('id' => 'G', 'name' => 'Georgia'),
            array('id' => 'GA', 'name' => 'Gabon'),
            array('id' => 'GB', 'name' => 'United Kingdom'),
            array('id' => 'GD', 'name' => 'Grenada'),
            array('id' => 'GF', 'name' => 'French Guiana'),
            array('id' => 'GG', 'name' => 'Guernsey'),
            array('id' => 'GH', 'name' => 'Ghana'),
            array('id' => 'GI', 'name' => 'Gibraltar'),
            array('id' => 'GL', 'name' => 'Greenland'),
            array('id' => 'GM', 'name' => 'Gambia'),
            array('id' => 'GN', 'name' => 'Guinea'),
            array('id' => 'GP', 'name' => 'Guadeloupe'),
            array('id' => 'GQ', 'name' => 'Equatorial Guinea'),
            array('id' => 'GR', 'name' => 'Greece'),
            array('id' => 'GS', 'name' => 'South Georgia And The South Sandwich Islands'),
            array('id' => 'GT', 'name' => 'Guatemala'),
            array('id' => 'GU', 'name' => 'Guam'),
            array('id' => 'GW', 'name' => 'Guinea-Bissau'),
            array('id' => 'GY', 'name' => 'Guyana'),
            array('id' => 'HK', 'name' => 'Hong Kong'),
            array('id' => 'HM', 'name' => 'Heard Island And Mcdonald Islands'),
            array('id' => 'HN', 'name' => 'Honduras'),
            array('id' => 'HR', 'name' => 'Croatia'),
            array('id' => 'HT', 'name' => 'Haiti'),
            array('id' => 'HU', 'name' => 'Hungary'),
            array('id' => 'I', 'name' => 'Ireland'),
            array('id' => 'ID', 'name' => 'Indonesia                     '),
            array('id' => 'IL', 'name' => 'Israel'),
            array('id' => 'IM', 'name' => 'Isle Of Man'),
            array('id' => 'IN', 'name' => 'India'),
            array('id' => 'IO', 'name' => 'British Indian Ocean Territory'),
            array('id' => 'IQ', 'name' => 'Iraq'),
            array('id' => 'IR', 'name' => 'Iran, Islamic Republic Of'),
            array('id' => 'IS', 'name' => 'Iceland'),
            array('id' => 'IT', 'name' => 'Italy'),
            array('id' => 'J', 'name' => 'Jersey'),
            array('id' => 'JM', 'name' => 'Jamaica'),
            array('id' => 'JO', 'name' => 'Jordan'),
            array('id' => 'JP', 'name' => 'Japan'),
            array('id' => 'K', 'name' => 'Kenya'),
            array('id' => 'KG', 'name' => 'Kyrgyzstan'),
            array('id' => 'KH', 'name' => 'Cambodia'),
            array('id' => 'KI', 'name' => 'Kiribati'),
            array('id' => 'KM', 'name' => 'Comoros'),
            array('id' => 'KN', 'name' => 'Saint Kitts And Nevis'),
            array('id' => 'KP', 'name' => 'Korea, Democratic People\'S Republic Of'),
            array('id' => 'KR', 'name' => 'Korea, Republic Of'),
            array('id' => 'KW', 'name' => 'Kuwait'),
            array('id' => 'KY', 'name' => 'Cayman Islands'),
            array('id' => 'KZ', 'name' => 'Kazakhstan'),
            array('id' => 'LA', 'name' => 'Lao People\'S Democratic Republic'),
            array('id' => 'LB', 'name' => 'Lebanon'),
            array('id' => 'LC', 'name' => 'Saint Lucia'),
            array('id' => 'LI', 'name' => 'Liechtenstein'),
            array('id' => 'LK', 'name' => 'Sri Lanka'),
            array('id' => 'LR', 'name' => 'Liberia'),
            array('id' => 'LS', 'name' => 'Lesotho'),
            array('id' => 'LT', 'name' => 'Lithuania'),
            array('id' => 'LU', 'name' => 'Luxembourg'),
            array('id' => 'LV', 'name' => 'Latvia'),
            array('id' => 'LY', 'name' => 'Libyan Arab Jamahiriya'),
            array('id' => 'M', 'name' => 'Montenegro'),
            array('id' => 'MA', 'name' => 'Morocco'),
            array('id' => 'MC', 'name' => 'Monaco'),
            array('id' => 'MD', 'name' => 'Moldova, Republic Of'),
            array('id' => 'MF', 'name' => 'Saint Martin'),
            array('id' => 'MG', 'name' => 'Madagascar'),
            array('id' => 'MH', 'name' => 'Marshall Islands'),
            array('id' => 'MK', 'name' => 'Macedonia, The Former Yugoslav Republic Of'),
            array('id' => 'ML', 'name' => 'Mali'),
            array('id' => 'MM', 'name' => 'Myanmar'),
            array('id' => 'MN', 'name' => 'Mongolia'),
            array('id' => 'MO', 'name' => 'Macao'),
            array('id' => 'MP', 'name' => 'Northern Mariana Islands'),
            array('id' => 'MQ', 'name' => 'Martinique'),
            array('id' => 'MR', 'name' => 'Mauritania'),
            array('id' => 'MS', 'name' => 'Montserrat'),
            array('id' => 'MT', 'name' => 'Malta'),
            array('id' => 'MU', 'name' => 'Mauritius'),
            array('id' => 'MV', 'name' => 'Maldives'),
            array('id' => 'MW', 'name' => 'Malawi'),
            array('id' => 'MX', 'name' => 'Mexico'),
            array('id' => 'MY', 'name' => 'Malaysia'),
            array('id' => 'MZ', 'name' => 'Mozambique'),
            array('id' => 'N', 'name' => 'Niger'),
            array('id' => 'NA', 'name' => 'Namibia'),
            array('id' => 'NC', 'name' => 'New Caledonia'),
            array('id' => 'NF', 'name' => 'Norfolk Island'),
            array('id' => 'NG', 'name' => 'Nigeria'),
            array('id' => 'NI', 'name' => 'Nicaragua'),
            array('id' => 'NL', 'name' => 'Netherlands'),
            array('id' => 'NO', 'name' => 'Norway'),
            array('id' => 'NP', 'name' => 'Nepal'),
            array('id' => 'NR', 'name' => 'Nauru'),
            array('id' => 'NU', 'name' => 'Niue'),
            array('id' => 'NZ', 'name' => 'New Zealand'),
            array('id' => 'OM', 'name' => 'Oman'),
            array('id' => 'P', 'name' => 'Peru'),
            array('id' => 'PA', 'name' => 'Panama'),
            array('id' => 'PF', 'name' => 'French Polynesia'),
            array('id' => 'PG', 'name' => 'Papua New Guinea'),
            array('id' => 'PH', 'name' => 'Philippines'),
            array('id' => 'PK', 'name' => 'Pakistan'),
            array('id' => 'PL', 'name' => 'Poland'),
            array('id' => 'PM', 'name' => 'Saint Pierre And Miquelon'),
            array('id' => 'PN', 'name' => 'Pitcairn'),
            array('id' => 'PR', 'name' => 'Puerto Rico'),
            array('id' => 'PS', 'name' => 'Palestinian Territory, Occupied'),
            array('id' => 'PT', 'name' => 'Portugal'),
            array('id' => 'PW', 'name' => 'Palau'),
            array('id' => 'PY', 'name' => 'Paraguay'),
            array('id' => 'QA', 'name' => 'Qatar'),
            array('id' => 'R', 'name' => 'Reunion'),
            array('id' => 'RO', 'name' => 'Romania'),
            array('id' => 'RS', 'name' => 'Serbia'),
            array('id' => 'RU', 'name' => 'Russian Federation'),
            array('id' => 'RW', 'name' => 'Rwanda'),
            array('id' => 'S', 'name' => 'Sweden'),
            array('id' => 'SA', 'name' => 'Saudi Arabia'),
            array('id' => 'SB', 'name' => 'Solomon Islands'),
            array('id' => 'SC', 'name' => 'Seychelles'),
            array('id' => 'SD', 'name' => 'Sudan'),
            array('id' => 'SG', 'name' => 'Singapore'),
            array('id' => 'SH', 'name' => 'Saint Helena'),
            array('id' => 'SI', 'name' => 'Slovenia'),
            array('id' => 'SJ', 'name' => 'Svalbard And Jan Mayen'),
            array('id' => 'SK', 'name' => 'Slovakia'),
            array('id' => 'SL', 'name' => 'Sierra Leone'),
            array('id' => 'SM', 'name' => 'San Marino'),
            array('id' => 'SN', 'name' => 'Senegal'),
            array('id' => 'SO', 'name' => 'Somalia'),
            array('id' => 'SR', 'name' => 'Suriname'),
            array('id' => 'SS', 'name' => 'South Sudan'),
            array('id' => 'ST', 'name' => 'Sao Tome And Principe'),
            array('id' => 'SV', 'name' => 'El Salvador'),
            array('id' => 'SX', 'name' => 'Sint Maarten'),
            array('id' => 'SY', 'name' => 'Syrian Arab Republic'),
            array('id' => 'SZ', 'name' => 'Swaziland'),
            array('id' => 'TC', 'name' => 'Turks And Caicos Islands'),
            array('id' => 'TD', 'name' => 'Chad'),
            array('id' => 'TF', 'name' => 'French Southern Territories'),
            array('id' => 'TG', 'name' => 'Togo'),
            array('id' => 'TH', 'name' => 'Thailand'),
            array('id' => 'TJ', 'name' => 'Tajikistan'),
            array('id' => 'TK', 'name' => 'Tokelau'),
            array('id' => 'TL', 'name' => 'Timor-Leste'),
            array('id' => 'TM', 'name' => 'Turkmenistan'),
            array('id' => 'TN', 'name' => 'Tunisia'),
            array('id' => 'TO', 'name' => 'Tonga'),
            array('id' => 'TR', 'name' => 'Turkey'),
            array('id' => 'TT', 'name' => 'Trinidad And Tobago'),
            array('id' => 'TV', 'name' => 'Tuvalu'),
            array('id' => 'TW', 'name' => 'Taiwan, Province Of China'),
            array('id' => 'TZ', 'name' => 'Tanzania, United Republic Of'),
            array('id' => 'UA', 'name' => 'Ukraine'),
            array('id' => 'UG', 'name' => 'Uganda'),
            array('id' => 'UM', 'name' => 'United States Minor Outlying Islands'),
            array('id' => 'US', 'name' => 'United States'),
            array('id' => 'UY', 'name' => 'Uruguay'),
            array('id' => 'UZ', 'name' => 'Uzbekistan'),
            array('id' => 'V', 'name' => 'Venezuela'),
            array('id' => 'VA', 'name' => 'Holy See (Vatican City State)'),
            array('id' => 'VC', 'name' => 'Saint Vincent And The Grenadines'),
            array('id' => 'VG', 'name' => 'Virgin Islands, British'),
            array('id' => 'VI', 'name' => 'Virgin Islands, U.S.'),
            array('id' => 'VN', 'name' => 'Viet Nam'),
            array('id' => 'VU', 'name' => 'Vanuatu'),
            array('id' => 'WF', 'name' => 'Wallis And Futuna'),
            array('id' => 'WS', 'name' => 'Samoa'),
            array('id' => 'Y', 'name' => 'Yemen'),
            array('id' => 'YT', 'name' => 'Mayotte'),
            array('id' => 'ZA', 'name' => 'South Africa'),
            array('id' => 'ZM', 'name' => 'Zambia'),
            array('id' => 'ZW', 'name' => 'Zimbabwe')
        ]);
    }
}
