package ONVIF::Media::Types::MotionInCells;
use strict;
use warnings;


__PACKAGE__->_set_element_form_qualified(1);

sub get_xmlns { 'http://www.onvif.org/ver10/schema' };

our $XML_ATTRIBUTE_CLASS = 'ONVIF::Media::Types::MotionInCells::_MotionInCells::XmlAttr';

sub __get_attr_class {
    return $XML_ATTRIBUTE_CLASS;
}

use Class::Std::Fast::Storable constructor => 'none';
use base qw(SOAP::WSDL::XSD::Typelib::ComplexType);

Class::Std::initialize();

{ # BLOCK to scope variables


__PACKAGE__->_factory(
    [ qw(
    ) ],
    {
    },
    {
    },
    {

    }
);

} # end BLOCK




package ONVIF::Media::Types::MotionInCells::_MotionInCells::XmlAttr;
use base qw(SOAP::WSDL::XSD::Typelib::AttributeSet);

{ # BLOCK to scope variables

my %Columns_of :ATTR(:get<Columns>);
my %Rows_of :ATTR(:get<Rows>);
my %Cells_of :ATTR(:get<Cells>);

__PACKAGE__->_factory(
    [ qw(
        Columns
        Rows
        Cells
    ) ],
    {

        Columns => \%Columns_of,

        Rows => \%Rows_of,

        Cells => \%Cells_of,
    },
    {
        Columns => 'SOAP::WSDL::XSD::Typelib::Builtin::integer',
        Rows => 'SOAP::WSDL::XSD::Typelib::Builtin::integer',
        Cells => 'SOAP::WSDL::XSD::Typelib::Builtin::base64Binary',
    }
);

} # end BLOCK




1;


=pod

=head1 NAME

ONVIF::Media::Types::MotionInCells

=head1 DESCRIPTION

Perl data type class for the XML Schema defined complexType
MotionInCells from the namespace http://www.onvif.org/ver10/schema.






=head2 PROPERTIES

The following properties may be accessed using get_PROPERTY / set_PROPERTY
methods:

=over



=back


=head1 METHODS

=head2 new

Constructor. The following data structure may be passed to new():

 { # ONVIF::Media::Types::MotionInCells
 },



=head2 attr

NOTE: Attribute documentation is experimental, and may be inaccurate.
See the correspondent WSDL/XML Schema if in question.

This class has additional attributes, accessibly via the C<attr()> method.

attr() returns an object of the class ONVIF::Media::Types::MotionInCells::_MotionInCells::XmlAttr.

The following attributes can be accessed on this object via the corresponding
get_/set_ methods:

=over

=item * Columns

 Number of columns of the cell grid (x dimension)



This attribute is of type L<SOAP::WSDL::XSD::Typelib::Builtin::integer|SOAP::WSDL::XSD::Typelib::Builtin::integer>.

=item * Rows

 Number of rows of the cell grid (y dimension)



This attribute is of type L<SOAP::WSDL::XSD::Typelib::Builtin::integer|SOAP::WSDL::XSD::Typelib::Builtin::integer>.

=item * Cells

 A “1” denotes a cell where motion is detected and a “0” an empty cell. The first cell is in the upper left corner. Then the cell order goes first from left to right and then from up to down. If the number of cells is not a multiple of 8 the last byte is filled with zeros. The information is run length encoded according to Packbit coding in ISO 12369 (TIFF, Revision 6.0).



This attribute is of type L<SOAP::WSDL::XSD::Typelib::Builtin::base64Binary|SOAP::WSDL::XSD::Typelib::Builtin::base64Binary>.


=back




=head1 AUTHOR

Generated by SOAP::WSDL

=cut

