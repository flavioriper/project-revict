<?php

    final class Connection {

        private static $connection;

        private function __construct(){}
        private function __clone(){}
        private function __wakeup(){}

        private static function load(string $arquivo): array {

            if (file_exists($arquivo)) {
                $parametros = parse_ini_file($arquivo);
            } else {
                throw new Exception ('Erro: Arquivo não encontrado');
            }
            return $parametros;
        }

        private static function make(array $parametros): PDO {

            $sgdb = isset($parametros['sgdb']) ? $parametros['sgdb'] : NULL;
            $usuario = isset($parametros['usuario']) ? $parametros['usuario'] : NULL;
            $senha = isset($parametros['senha']) ? $parametros['senha'] : NULL;
            $banco = isset($parametros['banco']) ? $parametros['banco'] : NULL;
            $servidor = isset($parametros['servidor']) ? $parametros['servidor'] : NULL;
            $porta = isset($parametros['porta']) ? $parametros['porta'] : NULL;

            if(!is_null($sgdb)) {
                // Cria a String de Conexão e Seleciona o banco de dados
                switch (strtoupper($sgdb)) {
                    case 'MYSQL' : $porta = isset($porta) ? $porta : 3306 ; return new PDO("mysql:host={$servidor};port={$porta};dbname={$banco}", $usuario, $senha);
                       break;
                    case 'MSSQL' : $porta = isset($porta) ? $porta : 1433 ;return new PDO("mssql:host={$servidor},{$porta};dbname={$banco}", $usuario, $senha);
                       break;
                    case 'PGSQL' : $porta = isset($porta) ? $porta : 5432 ;return new PDO("pgsql:dbname={$banco}; user={$usuario}; password={$senha}, host={$servidor};port={$porta}");
                       break;
                    case 'SQLITE' : return new PDO("sqlite:{$banco}");
                       break;
                    case 'OCI8' : return new PDO("oci:dbname={$banco}", $usuario, $senha);
                       break;
                    case 'FIREBIRD' : return new PDO("firebird:dbname={$banco}",$usuario, $senha);
                       break;
                }
            } else {
                throw new Exception('Erro: tipo de banco de dados não informado');
            }
        }

        public static function getInstance(string $arquivo):PDO {

            if (self::$connection == NULL) {
                self::$connection = self::make(self::load($arquivo));
                self::$connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$connection -> exec("set names utf8");
            }
            return self::$connection;
        }
    }

?>