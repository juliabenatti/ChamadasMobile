angular.module('root', [])
function usuarioController($scope) {
    $scope.cod_usuario = "John";
    $scope.nome = "Doe";
    $scope.email;
    $scope.senha;
}
function turmaController($scope) {
    $scope.cod_turma;
    $scope.curso;
    $scope.horario;
    $scope.semestre;
}
function materiaController($scope) {
    $scope.cod_materia;
    $scope.nome;
}
function alunoController($scope) {
    $scope.matricula;
    $scope.nome;
    $scope.idade;
    $scope.sexo;
}
function chamadaController($scope) {
    $scope.dia = "";
    $scope.presente;
}


/*var root = module('root', [])
    root.controller("index", ["$scope", function ($scope) {
        $scope.message = "Hello World!";
    }]);*/
