package repository

import "github.com/marcomilon/wasi/element"

type Organizer interface {
	Store(element.Identifier)
	List() []element.Identifier
}
