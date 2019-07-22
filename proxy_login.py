# Login to auth server from proxy client

# # python3
# import urllib.request
# contents = urllib.request.urlopen("http://example.com/foo/bar").read()

# python 2
import urllib2

auth_server_address = "http://192.168.1.7/auth-idea"

token = ''

while True:
    username = str(raw_input("Username: "))
    password = str(raw_input("Password: "))
    contents = urllib2.urlopen(auth_server_address + "/auth.php?username=" + username + "&password=" + password).read()
    if (contents.split(',')[0]).split(':')[1] == "valid":
        token = (contents.split(',')[1]).split(':')[1]
        break;
    print "Login invalid"

print token;

f = open("proxy_token.txt", "w")
f.write(token)
f.close()
