
GOFILES=$(shell find . -type f -name '*.go' -not -path "./vendor/*")

test:
	go test ./...

imports:
	goimports -w -d $(GOFILES)
