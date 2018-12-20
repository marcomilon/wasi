package services

import (
	"github.com/marcomilon/wasi/element"
	"github.com/marcomilon/wasi/repository"
)

type AtomService struct {
	repository repository.Organizer
}

func (a AtomService) Store(e element.Identifier) {
	a.repository.Store(e)
}

func (a AtomService) List() []element.Identifier {
	return a.repository.List()
}

func NewAtomService(repository repository.Organizer) AtomService {
	return AtomService{repository: repository}
}
