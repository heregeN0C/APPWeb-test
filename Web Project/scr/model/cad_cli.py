import psycopg2

#requisição dos dados da página html


#parâmetros do banco
db_host = 'localhost'
db_name = 'db_gerencia'
db_user = 'alyson'
db_password = 'Alys0n!@'

#string formatada de conexão com o banco
connection_string = "host={0}, user={1}, dbname={2}, password={3}".format(db_host, db_user, db_name, db_password)

conn = psycopg2.connect(connection_string)

#Executar o comando SQL
query = conn.cursor()
try:
    query.execute("INSERT INTO cliente (nome_cliente, contato_cliente) VALUES ($s, $s);", ("", ""))

    conn.commit()
    query.close()
    conn.close()
except Exception as e:
    print("Erro ao executar o comando: ", e)
    query.close()
    conn.close()
    exit(1)


print("Location: ../index.html")