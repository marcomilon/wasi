
GOFILES=$(shell find . -type f -name '*.go' -not -path "./vendor/*")

all: run

test:
	go test ./...
	
run: format
	go run main.go

format:
	goimports -w -d $(GOFILES)
