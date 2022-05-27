# // Listar - ---------------------------
import requests
import base64

host = '177.98.214.126'
url = "https://{}/webservice/v1/radusuarios".format(host)
token = "6:4dacdb8e4716tr5cbbabe508c3c59b4547e463817b1d9b9a1d20ab4812fe1a62".encode('utf-8')

payload = {
    'qtype': 'radusuarios.id',
    'query': '0',
    'oper': '>',
    'page': '1',
    'rp': '20',
    'sortname': 'radusuarios.id',
    'sortorder': 'asc'
}

headers = {
    'ixcsoft': 'listar',
    'Authorization': 'Basic {}'.format(base64.b64encode(token).decode('utf-8')),
    'Content-Type': 'application/json'
}

response = requests.post(url, data=payload, headers=headers)

print(response.text)
