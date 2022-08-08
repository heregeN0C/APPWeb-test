from fastapi import FastAPI
from fastapi.responses import FileResponse
from crud import *

app = FastAPI()


@app.get("/")
async def main():
    return FileResponse('view/index.html')

@app.get('/cadclientes/')
async def cadClintes():
    return FileResponse('view/cad_cli.html')
@app.on_event("startup")
async def startup():
    await database.connect()

@app.on_event("shutdown")
async def shutdown():
    await database.disconnect()

@app.post('/cadclientes/execute', response_model=Cliente)
async def executeCliente(cliParam: ClienteIn):

    nome = cliParam.nome_cliente
    contato = cliParam.contato_cliente
    query = clientes.insert().values(nome_cliente=cliParam.nome_cliente, contato_cliente=cliParam.contato_cliente)
    last_record_id = await database.execute(query)

    return {**cliParam.dict(), "id": last_record_id}


