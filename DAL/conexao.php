<?php
    namespace DAL;

    use PDO;
    use PDOException;

    class Conexao{
        private static $dbNome = 'veterinaria';
        private static $dbHost = 'localhost';
        private static $dbUsuario = 'root';
        private static $dbSenha = '';
        
        private static $conexao = null;

        public function __construct(){
            die ("A função init não é permitida");
        }

        public static function conectar(){
            if (self::$conexao == null || !self::$conexao->getAttribute(PDO::ATTR_ERRMODE)){
                try{
                    self::$conexao = new PDO("mysql:host=". self::$dbHost .";dbname=" . self::$dbNome, self::$dbUsuario, self::$dbSenha);
                }
                catch (PDOException $e){
                    die ("Erro na tentativa de conexão." . $e->getMessage());
                }
            }
            return self::$conexao;
        }

        public static function desconectar(){
            self::$conexao = null;
        }

    }
?>    