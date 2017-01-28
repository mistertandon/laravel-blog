<?php
Redis

Flush all redis keys.
Cache::store('redis')->flush();
=============================================================================
Store key for 10 minutes.
Cache::store('redis')->put('redis_key', 'redis_value', 10);
=============================================================================
Get value for specific key. Note: In the absence of `redis_key` 'null' value
will return.
Cache::store('redis')->get('redis_key');
=============================================================================
Get value for specific key. Note: In the absence of key `redis_key` default
value`defaultValue` will return.
Cache::store('redis')->get('redis_key', 'defaultValue');
=============================================================================    
Get value for `redis_key` key. Note: In the absence of key `redis_key` default
value `defaultValue` will return and store at `redis_key` key.

$expiresAt = Carbon::now()->addMinutes(10);
Cache::store('redis')->remember('redis_key', $expiresAt, 'defaultValue');    
=============================================================================
Checking for `redis_key` existence.
Cache::store('redis')->has('redis_key')
=============================================================================
Store key if key is not been already set.
$expiresAt = Carbon::now()->addMinutes(10);
Cache::store('redis')->add('redis_key', 'redis_value', $expiresAt)
=============================================================================
Store a key for forever
Cache::store('redis')->forever('redis_key', 'redis_value')
=============================================================================
Delete a key stored using forever method
Cache::store('redis')->forget('redis_key');
=============================================================================
Set 'keys' assigned under tags
Cache::store('redis')->tags('posts').put('redis_key1', 'redis_value1', 10);
Cache::store('redis')->tags('posts').put('redis_key2', 'redis_value2', 10);
=============================================================================
Unset keys associate with tags.
Cache::store('redis')->tags('posts')->flush();
=============================================================================        
        
        
        
        
        
        
        
        