# Silex Hmac 

[![Build Status](https://travis-ci.org/SilexFriends/Hmac.svg?branch=master)](https://travis-ci.org/SilexFriends/Hmac)
[![Code Climate](https://codeclimate.com/github/SilexFriends/Hmac/badges/gpa.svg)](https://codeclimate.com/github/SilexFriends/Hmac)
[![Test Coverage](https://codeclimate.com/github/SilexFriends/Hmac/badges/coverage.svg)](https://codeclimate.com/github/SilexFriends/Hmac/coverage)
[![Issue Count](https://codeclimate.com/github/SilexFriends/Hmac/badges/issue_count.svg)](https://codeclimate.com/github/SilexFriends/Hmac)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/7b8ed0fc-2f5a-4e6f-84fd-030430a3482e/mini.png)](https://insight.sensiolabs.com/projects/7b8ed0fc-2f5a-4e6f-84fd-030430a3482e)
[![Dependency Status](https://www.versioneye.com/user/projects/55ddde652383e9002500006d/badge.svg?style=flat)](https://www.versioneye.com/user/projects/55ddde652383e9002500006d)
[![Codacy Badge](https://api.codacy.com/project/badge/grade/7135b5aa3fad405a98c8a3ffd17d2a44)](https://www.codacy.com/app/mrprompt/silex-hmac-provider)

Silex Hmac Service Provider

## Install

```
composer require mrprompt/silex-hmac-provider
```

## Usage

```
use SilexFriends\Hmac\Hmac as HmacServiceProvider;

$app->register(new HmacServiceProvider());
```

## Testing

Just run *phpunit* without parameters

```
phpunit
```

## License 

MIT