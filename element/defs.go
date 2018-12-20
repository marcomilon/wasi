package element

type Identifier interface {
	GetID() string
	SetID(id string)
	GetBody() string
}
