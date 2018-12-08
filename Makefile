
GOFILES=$(shell find . -type f -name '*.go' -not -path "./vendor/*")

imports:
	goimports -w -d $(GOFILES)
