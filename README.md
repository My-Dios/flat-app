# Starbucks GR Portal
<div align="center" style='text-align : center;'>
  <div class='row'>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/FA_ESB_Logo_Digital.png/1200px-FA_ESB_Logo_Digital.png" alt="sbux-ods" width="250px"/>
  </div>
  <br>
  <i>The All-in-One Integerated Restaurant Technology</i>
  <br>
</div>

<br>
<div align="center">
<img src="https://img.shields.io/badge/version-v1.0.0-blue" />
<img src="https://img.shields.io/badge/license-ESB-green" />
<img src="https://img.shields.io/badge/contributors-34-brightgreen" />
</div>

## System Requirement
**System Operations:** Windows or Unix Base

**PHP:** >= 7.2.11

**MySQL:** 5.6

## Development Setup

### Prerequisites
<ul>
    <li><a href="https://code.visualstudio.com/download" target="_blank" rel="noopener noreferrer">Visual Studio Code</a></li>
    <li><a href="https://docs.google.com/document/d/10Xvm_m-IcQFSjnP-zyUdUItCayjlEMzU/edit?usp=sharing&ouid=101904115063108684048&rtpof=true&sd=true" target="_blank" rel="noopener noreferrer">Apache24 Web Server</a></li>
    <li><a href="https://gitlab.esb.co.id/custom/starbucks/starbucks-backend" target="_blank" rel="noopener noreferrer">starbucks-backend</a></li>
    <li><a href="https://gitlab.esb.co.id/custom/starbucks/starbucks-pos" target="_blank" rel="noopener noreferrer">starbucks-pos</a></li>
</ul>

### Setting Up a Project
<b>Clone the project</b>
<br>
clone into directory `C:\Apache24\htdocs`
```bash
git clone https://gitlab.esb.co.id/custom/starbucks/starbucks-gr-portal.git
```

<b>Vendor</b>
<br>
Download <a href="https://gitlab.esb.co.id/custom/starbucks/starbucks-pos" target="_blank" rel="noopener noreferrer">zip vendor</a> and extract zip to directory `starbucks-gr-portal/`

<b>Configuration</b>
<br>
Create the following file for local environment configuration:  
- `config/db.php`

```php
<?php
$username = 'root';
$password = '';
$params = require __DIR__ . '/params.php';

return [
    'db' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=esb_gr',
        'username' => $username,
        'password' => $password,
        'charset' => 'utf8',
        // 'enableSchemaCache' => true,
        // 'schemaCacheDuration' => 3600,
        // 'schemaCache' => 'cache',
    ],
    'db_sap' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'sqlsrv:server=PTKD11\SQLEXPRESS2014;Database=zddb',
        'username' => 'sa',
        'password' => 'userptkd',
        'charset' => 'utf8',
        // 'enableSchemaCache' => true,
        // 'schemaCacheDuration' => 3600,
        // 'schemaCache' => 'cache',
    ],
];
```

<b>Create 1 new schema</b> 
<br>
Open MySQL Workbench and create 1 schema:  
<ol>
    <li>esb_gr</li>
</ol>

<b>Migration</b>
<br>
Run Migration in directory `starbucks-gr-portal/`
```bash
php yii migrate
```

<b>Run the project</b>
<br>
Run with localhost and php version >= 7.2.11 and adjust the port to the port of the php version
```bash
http://localhost:82/starbucks-gr-portal/web/site/login
```

### Usage a Project
<b>Login</b>
<ol>
    <li>
        User <br>
        Username : administrator <br>
        Password : admin <br>
    </li>
    <li>
        User PI<br>
        Username : erwanom <br>
        Password : abc123 <br>
    </li>
</ol>


## Version
| Version | Date         | Update |
| :---:   |     :---:    |  ---   |
| `1.0.0`| `2022-03-01` | <ul><li>Initial Version</li></ul> |
