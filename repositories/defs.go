package repositories

import "github.com/marcomilon/wasi/elements"

type Repository interface {
	Store(*elements.Element) *elements.Element
	List()
}
