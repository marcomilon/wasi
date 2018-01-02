#!/bin/bash

BASEDIR=$(dirname "$0")

(export DOCUMENT_ROOT="$(pwd)" && docker-compose up)
