package services

import (
	"github.com/marcomilon/wasi/elements"
	"github.com/marcomilon/wasi/repositories"
)

type AtomService struct {
	repository repositories.Repository
}

func (a AtomService) Persist(e elements.Element) *elements.Element {
	a.repository.Store(&e)
	return &e
}

func (a AtomService) ReadAll() {
	a.repository.List()
}

func NewAtomService(repository repositories.Repository) AtomService {
	return AtomService{repository: repository}
}
