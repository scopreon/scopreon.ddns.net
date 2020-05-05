import requests
import string
import random
import sys


url = sys.argv[1]
number_of_times = int(sys.argv[2])

cookie= ''.join(random.choices(string.ascii_letters + string.digits, k=21))
#random 21 digit alphanumeric cookie
cookies = {
    'popshow-temp-id': cookie
}

headers = {
    'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:75.0) Gecko/20100101 Firefox/75.0',
    'Accept': 'application/json, text/plain, */*',
    'Accept-Language': 'en-GB,en;q=0.5',
    'Content-Type': 'application/json;charset=utf-8',
    'Origin': 'https://onyolo.com',
    'Connection': 'keep-alive',
    'Referer': 'https://onyolo.com/m/tphXmXmK6E?w=sEnD%20mE%20hOnEsT%20mEsSaGeS',
}


data = '{"text":"messagetosend","cookie":"ikx5iw4borz84hojq36ap","wording":"sEnD mE hOnEsT mEsSaGeS"}'
data = data.replace("messagetosend",sys.argv[3])



for x in range(0,number_of_times):
  x = requests.post(url[:19]+url[21:31]+'/message', headers=headers, cookies=cookies, data=data)
  if str(x.status_code) != '200':
    sys.exit()
