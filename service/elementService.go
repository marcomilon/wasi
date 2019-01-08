package service

import (
	"github.com/frankenbeanies/uuid4"
	"github.com/marcomilon/wasi/element"
)

func NewAtom(body string) element.Atom {
	return element.Atom{ID: generateID(), Body: body}
}

func NewBlock(atoms []element.Atom) element.Block {
	return element.Block{ID: generateID(), Body: atoms}
}

func NewDocument(blocks []element.Block) element.Document {
	return element.Document{ID: generateID(), Body: blocks}
}

func generateID() string {
	return uuid4.New().String()
}
