<?php

/**
 * IP Ranges, von denen auszugehen ist, dass ein Bot Deinen Content sucken will. 
 * Die Liste erhebt keinen Anspruch auf Vollständigkeit
 * 
 * autonomes System (AS): 
 * http://bgp.he.net/AS16265#_prefixes
 * 
 * IP Ranges für Faule:
 * http://houston.dnstools.com/?count=28&lookup=on&wwwhois=on&arin=on&portNum=80&target=85.17.0.0&submit=Go%21
 */

$arrHosterIpRanges = array( 
    # Hetzner
    '5.9.0.0-5.9.255.255' => 'Hetzner', 
    '46.4.0.0-46.4.255.255' => 'Hetzner',
    '78.46.0.0-78.47.255.255' => 'Hetzner',
    '85.10.192.0-85.10.255.255' => 'Hetzner',
    '88.198.0.0-88.198.255.255' => 'Hetzner',
    '176.9.0.0-176.9.255.255' => 'Hetzner',
    '178.63.0.0-178.63.255.255' => 'Hetzner',
    '188.40.0.0-188.40.255.255' => 'Hetzner', 
    '213.133.96.0-213.133.127.255' => 'Hetzner',
    '213.239.192.0-213.239.255.255' => 'Hetzner', 
    
    # domainfactory GmbH
    '46.252.16.0-46.252.31.255' => 'domainfactory',
    '80.67.16.0-80.67.31.255' => 'domainfactory',
    '109.239.48.0-109.239.63.255' => 'domainfactory',
    '141.0.20.0-141.0.21.255' => 'domainfactory',
    
    # unister
    '31.210.160.0-31.210.163.255' => 'unister',
    '81.201.144.0-81.201.144.255' => 'unister',
    '176.52.200.0-176.52.200.7' => 'unister',
    '178.249.24.0-178.249.24.31' => 'unister',
    '194.180.239.0-194.180.239.255' => 'unister',
    '217.18.176.0-217.18.176.63' => 'unister',
    
    # all-inkl
    '85.13.128.0-85.13.159.255' => 'allinkl',
    '85.13.176.0-85.13.191.255' => 'allinkl',
    '185.3.40.0-185.3.43.255' => 'allinkl',
    
    # 1&1
    '50.21.176.0-50.21.191.255' => '1&1 US',
    '74.208.0.0-74.208.255.255' => '1&1 US',
    '108.175.0.0-108.175.15.255' => '1&1 US',
    '198.71.48.0-198.71.63.255' => '1&1 US',
    '198.251.64.0-198.251.79.255' => '1&1 US',
    '216.250.112.0-216.250.127.255' => '1&1 US',
    '82.165.0.0-82.165.255.255' => '1&1 DE',
    '87.106.0.0-87.106.15.255' => '1&1 DE',
    '195.20.224.0-195.20.225.127' => '1&1 DE',
    '212.227.0.0-212.227.13.255' => '1&1 DE',
    '213.165.64.0-213.165.66.127' => '1&1 DE',
    '217.72.192.0-217.72.196.255' => '1&1 DE',
    '217.160.0.0-217.160.15.255' => '1&1 DE',
    '217.160.80.0-217.160.87.255' => '1&1 DE',
    
    # host europe
    '5.35.224.0-5.35.224.255' => 'Host Europe',
    '5.175.0.0-5.175.7.255' => 'Host Europe',
    '37.61.192.0-37.61.223.255' => 'Host Europe',
    '46.163.64.0-46.163.71.255' => 'Host Europe',
    '80.237.128.0-80.237.128.127' => 'Host Europe',
    '80.246.48.0-80.246.49.255' => 'Host Europe',
    '83.169.0.0-83.169.7.255' => 'Host Europe',
    '85.119.152.0-85.119.152.255' => 'Host Europe',
    '87.230.0.0-87.230.15.255' => 'Host Europe',
    '88.80.192.0-88.80.192.31' => 'Host Europe',
    '91.250.64.0-91.250.67.255' => 'Host Europe',
    '92.51.128.0-92.51.135.255' => 'Host Europe',
    '93.92.144.0-93.92.145.255' => 'Host Europe',
    '94.199.240.0-94.199.240.255' => 'Host Europe',
    '176.28.0.0-176.28.0.15' => 'Host Europe',
    '178.77.64.0-178.77.71.255' => 'Host Europe',
    '195.225.104.0-195.225.107.255' => 'Host Europe',
    
    # strato
    '81.169.128.0-81.169.143.255' => 'Strato',
    '81.169.144.0-81.169.148.255' => 'Strato',
    '81.169.157.0-81.169.188.255' => 'Strato',
    '81.169.192.0-81.169.255.255' => 'Strato',
    '85.214.0.0-85.214.3.255' => 'Strato',
    '192.67.198.0-192.67.198.255' => 'Strato',
    
    # sucker
    '65.19.128.0-65.19.191.255' => 'Feedly Cloud',
    '216.218.207.136-216.218.207.143' => 'DevHD HURRICANE-CE2128-851',
    '216.218.128.0-216.218.255.255' => 'Feedly HURRICANE-1',
    '128.30.0.0-128.30.255.255' => 'W3C Validator',
    '8.8.204.0-8.8.204.255' => 'moreover.com',
    '142.4.96.0-142.4.127.255' => 'spammer PEG TECH INC',
    '95.211.79.96-95.211.83.63' => 'solomono.ru',
    '12.1.41.224-12.1.41.255' => 'Kilpatrick Townsend & Stockton LLP',
    
    # LEASEWEB
    '85.17.174.0-85.17.174.255' => 'LeaseWeb',
    '5.79.64.0-5.79.123.255' => 'LeaseWeb',
    '31.31.32.0-31.31.33.255' => 'LeaseWeb',
    '37.48.64.0-37.48.120.255' => 'LeaseWeb',
    '37.58.48.0-37.58.55.255' => 'LeaseWeb',
    '46.165.192.0-46.165.199.255' => 'LeaseWeb',
    '46.182.120.0-46.182.123.255' => 'LeaseWeb',
    '62.212.64.0-62.212.64.255' => 'LeaseWeb',
    '82.192.64.0-82.192.65.255' => 'LeaseWeb',
    '83.149.64.0-83.149.64.255' => 'LeaseWeb',
    '85.17.0.0-85.17.0.31' => 'LeaseWeb',
    '94.75.192.0-94.75.192.255' => 'LeaseWeb',
    '95.211.0.0-95.211.2.159' => 'LeaseWeb',
    '185.17.144.0-185.17.147.255' => 'LeaseWeb',
    '185.17.184.0-185.17.187.255' => 'LeaseWeb',
    '185.28.68.0-185.28.68.255' => 'LeaseWeb',
    '185.28.69.0-185.28.69.255' => 'LeaseWeb',
    '185.28.71.0-185.28.71.255' => 'LeaseWeb',
    '217.20.124.0-217.20.125.255' => 'LeaseWeb',
    
    # amazon https://forums.aws.amazon.com/ann.jspa?annID=1701
    '72.44.32.0-72.44.63.255' => 'amazon US East (Northern Virginia)',
    '67.202.0.0-67.202.63.255' => 'amazon US East (Northern Virginia)',
    '75.101.128.0-75.101.255.255' => 'amazon US East (Northern Virginia)',
    '174.129.0.0-174.129.255.255' => 'amazon US East (Northern Virginia)',
    '204.236.192.0-204.236.255.255' => 'amazon US East (Northern Virginia)',
    '184.73.0.0-184.73.255.255' => 'amazon US East (Northern Virginia)',
    '184.73.0.0-184.73.255.255' => 'amazon US East (Northern Virginia)',
    '184.72.128.0-184.72.255.255' => 'amazon US East (Northern Virginia)',
    '184.72.64.0-184.72.127.255' => 'amazon US East (Northern Virginia)',
    '50.16.0.0-50.17.255.255' => 'amazon US East (Northern Virginia)',
    '50.19.0.0-50.19.255.255' => 'amazon US East (Northern Virginia)',
    '107.20.0.0-107.23.255.255' => 'amazon US East (Northern Virginia)',
    '23.20.0.0-23.23.255.255' => 'amazon US East (Northern Virginia)',
    '54.242.0.0-54.243.255.255' => 'amazon US East (Northern Virginia)',
    '54.234.0.0-54.235.255.255' => 'amazon US East (Northern Virginia)',
    '54.236.0.0-54.237.255.255' => 'amazon US East (Northern Virginia)',
    '54.224.0.0-54.225.255.255' => 'amazon US East (Northern Virginia)',
    '54.226.0.0-54.227.255.255' => 'amazon US East (Northern Virginia)',
    '54.208.0.0-54.209.255.255' => 'amazon US East (Northern Virginia)',
    '54.210.0.0-54.211.255.255' => 'amazon US East (Northern Virginia)',
    '54.221.0.0-54.221.255.255' => 'amazon US East (Northern Virginia)',
    '54.204.0.0-54.205.255.255' => 'amazon US East (Northern Virginia)',
    '50.112.0.0-50.112.255.255' => 'amazon US West (Oregon)',
    '54.245.0.0-54.245.255.255' => 'amazon US West (Oregon)',
    '54.244.0.0-54.244.255.255' => 'amazon US West (Oregon)',
    '54.214.0.0-54.214.255.255' => 'amazon US West (Oregon)',
    '54.212.0.0-54.213.255.255' => 'amazon US West (Oregon)',
    '54.218.0.0-54.218.255.255' => 'amazon US West (Oregon)',
    '54.200.0.0-54.201.255.255' => 'amazon US West (Oregon)',
    '54.202.0.0-54.203.255.255' => 'amazon US West (Oregon)',
    '204.236.128.0-204.236.191.255' => 'amazon US West (Northern California)',
    '184.72.0.0-184.72.63.255' => 'amazon US West (Northern California)',
    '50.18.0.0-50.18.255.255' => 'amazon US West (Northern California)',
    '184.169.128.0-184.169.255.255' => 'amazon US West (Northern California)',
    '54.241.0.0-54.241.255.255' => 'amazon US West (Northern California)',
    '54.215.0.0-54.215.255.255' => 'amazon US West (Northern California)',
    '54.219.0.0-54.219.255.255' => 'amazon US West (Northern California)',
    '79.125.0.0-79.125.127.255' => 'amazon EU (Ireland)',
    '46.51.128.0-46.51.191.255' => 'amazon EU (Ireland)',
    '46.51.192.0-46.51.207.255' => 'amazon EU (Ireland)',
    '46.137.0.0-46.137.127.255' => 'amazon EU (Ireland)',
    '46.137.128.0-46.137.191.255' => 'amazon EU (Ireland)',
    '176.34.128.0-176.34.255.255' => 'amazon EU (Ireland)',
    '176.34.64.0-176.34.127.255' => 'amazon EU (Ireland)',
    '54.247.0.0-54.247.255.255' => 'amazon EU (Ireland)',
    '54.246.0.0-54.246.255.255' => 'amazon EU (Ireland)',
    '54.228.0.0-54.228.255.255' => 'amazon EU (Ireland)',
    '54.216.0.0-54.217.255.255' => 'amazon EU (Ireland)',
    '54.229.0.0-54.229.255.255' => 'amazon EU (Ireland)',
    '54.220.0.0-54.220.255.255' => 'amazon EU (Ireland)',
    '175.41.128.0-175.41.191.255' => 'amazon Asia Pacific (Singapore)',
    '122.248.192.0-122.248.255.255' => 'amazon Asia Pacific (Singapore)',
    '46.137.192.0-46.137.255.255' => 'amazon Asia Pacific (Singapore)',
    '46.51.216.0-46.51.223.255' => 'amazon Asia Pacific (Singapore)',
    '54.251.0.0-54.251.255.255' => 'amazon Asia Pacific (Singapore)',
    '54.254.0.0-54.254.255.255' => 'amazon Asia Pacific (Singapore)',
    '54.255.0.0-54.255.255.255' => 'amazon Asia Pacific (Singapore)',
    '54.252.0.0-54.252.255.255' => 'amazon Asia Pacific (Sydney)',
    '54.253.0.0-54.253.255.255' => 'amazon Asia Pacific (Sydney)',
    '54.206.0.0-54.206.255.255' => 'amazon Asia Pacific (Sydney)',
    '175.41.192.0-175.41.255.255' => 'amazon Asia Pacific (Tokyo)',
    '46.51.224.0-46.51.255.255' => 'amazon Asia Pacific (Tokyo)',
    '176.32.64.0-176.32.95.255' => 'amazon Asia Pacific (Tokyo)',
    '103.4.8.0-103.4.15.255' => 'amazon Asia Pacific (Tokyo)',
    '176.34.0.0-176.34.63.255' => 'amazon Asia Pacific (Tokyo)',
    '54.248.0.0-54.249.255.255' => 'amazon Asia Pacific (Tokyo)',
    '54.250.0.0-54.250.255.255' => 'amazon Asia Pacific (Tokyo)',
    '54.238.0.0-54.238.255.255' => 'amazon Asia Pacific (Tokyo)',
    '177.71.128.0-177.71.255.255' => 'amazon South America (Sao Paulo)',
    '54.232.0.0-54.232.255.255' => 'amazon South America (Sao Paulo)',
    '54.233.0.0-54.233.63.255' => 'amazon South America (Sao Paulo)',
    '54.207.0.0-54.207.255.255' => 'amazon South America (Sao Paulo)',
    '96.127.0.0-96.127.63.255' => 'amazon GovCloud', 
    
    #rackspace
    '78.136.33.208-78.136.33.215' => 'Rackspace',
    '173.203.0.0-173.203.255.255' => 'Rackspace',
    '37.188.112.0-37.188.115.255' => 'Rackspace UK',
    '94.236.55.160-94.236.55.167' => 'Rackspace IP Space',
    '204.232.192.0-204.232.207.255' => 'Rackspace Cloud',
    '173.203.194.0-173.203.223.255' => 'Rackspace Cloud',
    '174.143.152.0-174.143.173.255' => 'Rackspace Cloud',
    
    #encoding.com
    '208.87.216.0-208.87.223.255' => 'Encoding.com'
    
    );

?>
