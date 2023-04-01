
GOFILES=$(shell find . -type f -name '*.go' -not -path "./vendor/*")

all: run
	
run:
	go run main.go

test: 
	go test ./...
