from pydantic import BaseModel
import sqlalchemy
from fastapi import FastAPI
import databases

DATABASE_URL = "postgresql://alyson:87600979@localhost/db_gerencia"

database = databases.Database(DATABASE_URL)

app = FastAPI()

class Cliente(BaseModel):
    nome_cliente: str
    contato_cliente: str



#PARÂMETROS DO SQLALCHEMY
metadata = sqlalchemy.MetaData()

clientes = sqlalchemy.Table(
    'clientes',
     metadata,
    sqlalchemy.Column('id_cliente', sqlalchemy.Integer, primary_key=True),
    sqlalchemy.Column('nome_cliente',sqlalchemy.String),
    sqlalchemy.Column('contato_cliente',sqlalchemy.String)
)
engine = sqlalchemy.create_engine(DATABASE_URL)
metadata.create_all(engine)

#CLASSE DO OBJETO CLIENTE

class ClienteIn(BaseModel):
    nome_cliente: str
    contato_cliente: str

class Cliente(BaseModel):
    nome_cliente: str
    contato_cliente: str
