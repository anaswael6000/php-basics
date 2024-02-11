<?php

function checkForErrors(mixed $success)
{
    if ($success !== false) return;
    exit(socket_strerror(socket_last_error()) . PHP_EOL);
}

//Server socket 

// Create a server socket
$serverSocket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
checkForErrors($serverSocket);

// Bind the server socket to a specific ip and port
$host = "localhost";
$port = 5030;
checkForErrors(socket_bind($serverSocket, $host, $port));

// Listens for clients attempting to connect
checkForErrors(socket_listen($serverSocket));

// Create a socket client
$clientSocket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
checkForErrors($clientSocket);

// Connect to the server socket
checkForErrors(socket_connect($clientSocket, $host, $port));

// Accept a client
$client = socket_accept($serverSocket);
checkForErrors($client);

// Write data to the server
socket_write($clientSocket, "Hello, server");

// Read data from the client socket
$data = socket_read($client, 1064);
checkForErrors($data);
echo $data . PHP_EOL;

socket_close($serverSocket);
socket_close($clientSocket);