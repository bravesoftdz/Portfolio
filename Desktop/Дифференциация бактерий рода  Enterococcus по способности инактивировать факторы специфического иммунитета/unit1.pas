unit Unit1;

{$mode objfpc}{$H+}

interface

uses
  Classes, SysUtils, FileUtil, PrintersDlgs, Forms, Controls, Graphics, Dialogs,
  Grids, StdCtrls, unit2;

type

  { TForm1 }

  TForm1 = class(TForm)
    Button1: TButton;
    Button2: TButton;
    Button3: TButton;
    GroupBox1: TGroupBox;
    Label1: TLabel;
    Label2: TLabel;
    Label3: TLabel;
    StringGrid1: TStringGrid;
    StringGrid2: TStringGrid;
    procedure Button1Click(Sender: TObject);
    procedure Button2Click(Sender: TObject);
    procedure Button3Click(Sender: TObject);
    procedure FormCreate(Sender: TObject);
    procedure GroupBox1Click(Sender: TObject);
    procedure StringGrid1Enter(Sender: TObject);
    procedure StringGrid1Exit(Sender: TObject);
    procedure StringGrid2Enter(Sender: TObject);
    procedure StringGrid2Exit(Sender: TObject);
  private
    { private declarations }
  public
    { public declarations }
  end;

var
  Form1: TForm1;
  x1,x2,x3,x4,y:Extended;
  i,j,n,m:Integer;

implementation

{$R *.lfm}

{ TForm1 }

procedure TForm1.FormCreate(Sender: TObject);
begin
left:=1;
top:=1;
Label2.caption:='';
Label3.caption:='';
end;

procedure TForm1.GroupBox1Click(Sender: TObject);
begin

end;

procedure TForm1.StringGrid1Enter(Sender: TObject);
begin

end;

procedure TForm1.StringGrid1Exit(Sender: TObject);
begin

end;

procedure TForm1.StringGrid2Enter(Sender: TObject);
begin

end;

procedure TForm1.StringGrid2Exit(Sender: TObject);
begin

end;



procedure TForm1.Button1Click(Sender: TObject);
begin

 if (StringGrid2.Cells[1,1]='') or (StringGrid2.Cells[1,2]='') or (StringGrid2.Cells[1,3]='') or (StringGrid2.Cells[1,4]='') then MessageDlg('Заполните все поля в стольбце "Значение"', mtError,[mbOk],0)
 else
 begin
   x1:=StrToFloat(StringGrid2.Cells[1,1]);
   x2:=StrToFloat(StringGrid2.Cells[1,2]);
   x3:=StrToFloat(StringGrid2.Cells[1,3]);
   x4:=StrToFloat(StringGrid2.Cells[1,4]);
   y:=-0.770764418+0.00601804146*x1+0.0112234521*x2+0.00936905264*x3+0.131805643*x4;
   Label2.caption:='Y='+FloatToStr(y);
   if y>0.5 then Label3.caption:='Патогенная микрофлора' else Label3.caption:='Нормальная микрофлора';
 end;
end;

procedure TForm1.Button2Click(Sender: TObject);
begin
Label2.caption:='';
Label3.caption:='';
StringGrid1.Cells[1,0]:='';
StringGrid1.Cells[1,1]:='';
StringGrid1.Cells[1,2]:='';
StringGrid1.Cells[1,3]:='';
StringGrid2.Cells[1,1]:='';
StringGrid2.Cells[1,2]:='';
StringGrid2.Cells[1,3]:='';
StringGrid2.Cells[1,4]:='';
StringGrid2.Cells[2,1]:='%';
StringGrid2.Cells[2,2]:='%';
StringGrid2.Cells[2,3]:='%';
StringGrid2.Cells[2,4]:='мкг/мл';
end;

procedure TForm1.Button3Click(Sender: TObject);
begin
Form2:= TForm2.Create(self); Form2.ShowModal; Form2.Free;
end;
end.

