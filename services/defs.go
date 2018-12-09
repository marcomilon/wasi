package services

import "github.com/marcomilon/wasi/elements"

type Service interface {
	Create() elements.Element
	Persist(*elements.Element) *elements.Element
	GetAll()
}
