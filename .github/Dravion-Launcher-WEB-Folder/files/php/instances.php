<?php
$instance['MainV1'] = array_merge($instance['MainV1'], array(
    "loadder" => array(
        "minecraft_version" => "1.8.9",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'essential',
        'logs',
        'resourcepacks',
        'saves',
        'screenshots',
        'shaderpacks',
        'W-OVERFLOW',
        'options.txt',
        'optionsof.txt'
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "Hypixel",
        "ip" => "mc.hypixel.net",
        "port" => 25565
    )
));